<?php

    $api_url = 'https://api.bigdatacloud.net/data/client-ip';
    $ip_info = file_get_contents($api_url, false, $context);
    $ip_address = json_decode($ip_info)->ipString;
    
    $response = array('ip_address' => $ip_address);
    echo json_encode($response);

?>