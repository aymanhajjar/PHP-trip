<?php

    $url = 'http://ip-api.com/json/?fields=61439';
    $location = file_get_contents($url);
    $data = json_decode($location);

    $response = array('location' => $data->city . ', ' . $data->regionName . ', ' . $data->country);
    echo json_encode($response);
    
?>