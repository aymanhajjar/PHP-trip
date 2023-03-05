<?php

    $string = $_GET['string'];
    $string_holder = $string;

    function reverse($string) {
        $numbers = array();
        $newstring = '';

        for ($i = 0; $i < strlen($string); $i++) {
            if (is_numeric($string[$i])) {
                array_push($numbers,$string[$i]);
            }
        }

        for ($i = 0; $i < strlen($string); $i++) {
        if (is_numeric($string[$i])) {
            $newstring .= array_pop($numbers);
        } else {
            $newstring .= $string[$i];
        }
        }

        return $newstring;
    }

    $reversed = reverse($string);
    $response = array('status' => "$string_holder reversed is $reversed");
    echo json_encode($response);
?>