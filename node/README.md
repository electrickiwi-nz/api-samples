# Electric Kiwi API - NODE JS Sample

This is a node.js app that provides sample code on how to authenticate and make calls to the Electric Kiwi API. To get started with the APIs, please check the [docs](https://developer.electrickiwi.co.nz/api-documentation/).


## Language Requirements

- node js 14.15+
- npm 6.14+


## Installation

To get started, install the dependencies first using npm

```
npm install
```


## Configuration

Before running the server, you will need to modify `index.js` to include your client credentials by modifying `YOUR_CLIENT_ID` and `YOUR_CLIENT_SECRET`.

```JavaScript
const clientId = 'YOUR_CLIENT_ID';
const clientSecret = 'YOUR_CLIENT_SECRET';
```


## Running

To start running the server and the authentication process, run the command:

```
npm start
```

Once you have confirmed the server has started, visit `http://localhost:5080/auth` to start the authentication process.


## Dependencies

This sample uses the following main libraries, which will be installed via NPM:

* client-oauth2
* express
* axios