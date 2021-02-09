# Electric Kiwi API - Python Sample

This is a Javascript client that provides sample code on how to authenticate and make calls to Electric Kiwi API. To get started with the APIs, please check the [docs](https://developer.electrickiwi.co.nz/api-documentation/).


## Javascript library dependancy  

For OAuth2 to work in Javascript we use the following library: [zalando-stups/oauth2-client-js](https://github.com/zalando-stups/oauth2-client-js) 


## Configuration

Before moving to the next step, you'd need to modify `auth.js` file with your `YOUR_CLIENT_ID` and callback URI, as described in this file.

Note that for JavaScript usage, your client needs to work with implicit grant type.


## Getting started

To get started, you'd need to run a server on localhost, for this step, a python3 script is provided to run a simple HTTP server, however you can run it in different ways.

You can run the server using python (or python3 on linux) command:

```
python server.py
```


## Authentication and API calls

After starting your local server, visit `http://localhost:5080/`, you'll then be redirected to the authentication page and then redirected to see a sample API call result.


## Dependencies

This sample uses the following main libraries:

* oauth2-client-js