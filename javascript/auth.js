const AUTH_URL="https://welcome-dev.electrickiwi.co.nz/oauth/authorize"
const API_URL="https://api-dev.electrickiwi.co.nz"
const SCOPES="read_consumption_summary+read_session"
const CALLBACK_URL= "http://localhost:5080/callback"
const CLIENT_ID="YOUR_CLIENT_ID"


const oauth = window["oauth2-client-js"];
const apiProvider = new oauth.Provider({
    id: 'electrickiwi', // required
    authorization_url: AUTH_URL // required
});

/**
 * Sends a GET request to the provided url using XMLHttpRequest.
 * @param {string} url url to get.
 * @param {string} token access token to authenticate.
 */
function httpGet(url, token) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", url, false); // false for synchronous request
    xmlHttp.setRequestHeader("Authorization", `Bearer ${token}`); // Add auth token to headers
    xmlHttp.send(null);
    return xmlHttp.response;
}