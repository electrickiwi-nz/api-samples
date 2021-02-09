<?php

    require dirname(__DIR__, 1) . '/init.php';

    session_start();
    // Redirect user to auth page if access token is not present or empty
    if(!isset($_SESSION['accessToken']) || empty($_SESSION['accessToken'])) {
        header('Location: ' . $BASE_URI . '/');
        exit;
    }

    function http_get($url){
        // A helper function to make a GET request to a URL using our access token
        // in headers
        $header = array("Authorization: Bearer {$_SESSION['accessToken']}");
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true
        ));
        $resnpose = curl_exec($curl);
        curl_close($curl);
        return $resnpose;
    }

    // Making GET request to /session/
    $session_response = http_get(SESSION_ENDPOINT);

    $json_session = json_decode($session_response, true);

    // Get customer info to call /consumption/summary/
    $customer = $json_session['data']['customer'][0];
    $connectionId = $customer['connection']['connection_id'];
    $customerNumber = $customer['customer_number'];

    // Prepare the consumption summary URL
    $consumption_summary_uri = CONSUMPTION_SUMMARY_ENDPOINT . $customerNumber . '/' . $connectionId . '/';
    // Making GET request to /consumption/summary/
    $consumption_summary_resp = http_get($consumption_summary_uri);
    $consumption_summary_json = json_decode($consumption_summary_resp, true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Sample</title>
    <style>
        pre {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
    </style>
</head>
<body>

    <div>
        <h2 id="sessHeader">Session data</h2>
        <pre id="session">
        <?php
            echo json_encode($json_session, JSON_PRETTY_PRINT);
        ?>
        </pre>
        <h2 id="summaryHeader">Summary data</h2>
        <pre id="summary">
        <?php
            echo json_encode($consumption_summary_json, JSON_PRETTY_PRINT);
        ?>
        </pre>
    </div>
</body>
</html>