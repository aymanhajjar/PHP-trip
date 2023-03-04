<?php

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(strlen($password) >= 8 && preg_match('/[A-Z]/', $password) && preg_match('/\d/', $password) && preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $password)
    && preg_match('/[a-z]/', $password)
    && preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
        $response['status'] = true;
        echo json_encode($response);
    } else {
        $response['status'] = false;
        echo json_encode($response);
    }
?>