<?php

	CONST AUTH_URL = 'https://welcome-dev.electrickiwi.co.nz/oauth/authorize';
	CONST TOKEN_URL = 'https://welcome-dev.electrickiwi.co.nz/oauth/token';

	CONST API_URL = 'https://api-dev.electrickiwi.co.nz';
	CONST SCOPES = ["read_session+read_consumption_summary"];

	CONST SESSION_ENDPOINT = API_URL . '/session/';
	CONST CONSUMPTION_SUMMARY_ENDPOINT = API_URL . '/consumption/summary/';

	// ** Edit Your Config Here **
	// Your base host and port, for this example we're running on localhost and port 5080
	CONST HOST = 'localhost';
	CONST PORT = '5080';
	CONST BASE_URI = 'http://' . HOST . ':' . PORT;

	$clientId = 'YOUR_CLIENT_ID';
	$clientSecret = 'YOUR_CLIENT_SECRET';
	$redirectUri = BASE_URI . '/callback';
