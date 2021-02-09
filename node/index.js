const express = require('express');
const ClientOAuth2 = require('client-oauth2');
const axios = require('axios');
const app = express();
const port = 5080;


const clientId = 'YOUR_CLIENT_ID';
const clientSecret = 'YOUR_CLIENT_SECRET';
const redirectUri = 'http://localhost:5080/callback';

const authorizationUri = 'https://welcome-dev.electrickiwi.co.nz/oauth/authorize';
const accessTokenUri = 'https://welcome-dev.electrickiwi.co.nz/oauth/token';
const scopes = ['read_consumption_summary', 'read_session'];
const sessionEndpoint = "https://api-dev.electrickiwi.co.nz/session/";
const consumptionSummaryEndpoint = "https://api-dev.electrickiwi.co.nz/consumption/summary";

let token;

// Create a client with your credentials and URLs
const electrickiwiAuth = new ClientOAuth2({
    clientId,
    clientSecret,
    authorizationUri,
    accessTokenUri,
    redirectUri,
    scopes
})

app.get('/auth', function (req, res) {
    // First step in authorization, redirection to the authorizationUri supplied
    const uri = electrickiwiAuth.code.getUri();
    res.redirect(uri);
})

app.get('/callback', function (req, res) {
    /*
    Retrieving an access token.
    After you've redirected from our provider to your callback URL,
    we'll get the access token now with the provided code in callback URL
    */
    electrickiwiAuth.code.getToken(req.originalUrl)
        .then(function (user) {
            console.log(user);
            // Store token, this could be stored in your database as well.
            token = user.accessToken;
            // Redirect to / and make 2 simple API calls
            return res.redirect("/");
        });
})

app.get("/", async (req, res) => {

    // Authenticate user if token is null
    if (token === null) {
        return res.redirect("/auth");
    }

    // headers with the bearer token we retrieved
    const config = {
        headers: {
            Authorization: `Bearer ${token}`
        }
    };
    try {
        // Get request to /session/
        const sessionResponse = await axios.get(sessionEndpoint, config);
        // Extract customer infromation from session
        const sessionData = sessionResponse.data;
        // Get first customer, customer number and connection ID
        const customer = sessionData.data.customer[0];
        const customer_number = customer.customer_number;
        const connection_id = customer.connection.connection_id;
        // Get request to /consumption/summary/customer_number/id/
        const url = `${consumptionSummaryEndpoint}/${customer_number}/${connection_id}/`;
        const summaryResponse = await axios.get(url, config);
        const summaryData = summaryResponse.data;
        // Return the data as json
        return res.json({
            sessionData,
            summaryData
        });
    } catch (err) {
        return res.send(err);
    }
})

app.listen(port, () => {
    console.log(`ek-api-sample listening at http://localhost:${port}`);
})