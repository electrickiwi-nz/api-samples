# Electric Kiwi API - Python Sample

This is a Javascript client that provides sample code on how to authenticate and make calls to the Electric Kiwi API. To get started with the APIs, please check the [docs](https://developer.electrickiwi.co.nz/api-documentation/).


## Javascript library dependancy  

For OAuth2 to work in Javascript the following library is used: [zalando-stups/oauth2-client-js](https://github.com/zalando-stups/oauth2-client-js)


## Configuration

Before moving to the next step, you will need to modify `auth.js` file with your `YOUR_CLIENT_ID` and callback URI, as described in this file.

Note that for JavaScript usage, your client needs to work with implicit grant type.


## Getting started

To get started, you will need to run a server on localhost, for this step, a python3 script is provided to run a simple HTTP server, however you can run it in different ways.

You can run the server using python (or python3 on linux) command:

```bash
python server.py
```


## Authentication and API calls

After starting your local server, visit `http://localhost:5080/`, you'll then be redirected to the authentication page and then redirected to see a sample API call result.


## Dependencies

This sample uses the following main libraries:

* oauth2-client-js


## Running the sample within Docker

To run the sample within Docker, Docker desktop has to be installed. The steps for the installation can be found [here](https://www.docker.com/products/docker-desktop)

If you are using docker version 3.6 and above, use the below commands: 

```bash
cd javascript
docker compose build
docker compose run -p "5080:5080" ek_api_javascript
```

If you are using docker version below 3.6, use the below commands: 

```bash
cd javascript
docker-compose build
docker-compose run -p "5080:5080" ek_api_javascript
```