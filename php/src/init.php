<?php

    require 'config.php';
    require 'vendor/autoload.php';

    use League\OAuth2\Client\Provider\GenericProvider;

    $provider = new League\OAuth2\Client\Provider\GenericProvider([
        'clientId'                => $clientId,    // The client ID assigned to you by the provider
        'clientSecret'            => $clientSecret,    // The client password assigned to you by the provider
        'redirectUri'             => $redirectUri,    // Your redirect URI
        'urlAuthorize'            => AUTH_URL,    // Provider's authorization URL
        'urlAccessToken'          => TOKEN_URL,   // Provider's access token URL
        'scopes'                  => SCOPES,    // Scopes required
        "urlResourceOwnerDetails" => '',
    ]);
