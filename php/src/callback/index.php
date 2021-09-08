<?php

    require dirname(__DIR__, 1) . '/init.php';

    session_start();
    // We request an access token, which we may use in authenticated
    // requests against the service provider's API.
    $accessToken = $provider->getAccessToken('authorization_code', array('code' => $_GET['code']));
    $_SESSION["accessToken"] = $accessToken;

    // Redirect to API Sample Page
    header('Location: ' . $BASE_URI . '/api');
    exit();
