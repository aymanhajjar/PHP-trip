<?php

    $string = $_GET['string'];
    $word_holder = $string;

    function consonants($string) {
        $set_of_consonants = '';
        $vowels = ['e', 'i', 'a', 'u', 'o'];
    
        while(!in_array($string[0], $vowels) && strlen($string) > 0) {
            $set_of_consonants .= $string[0];
            $string = substr($string, 1);
        }
        $word = $string . $set_of_consonants . 'ay';
        return $word;
    }

    $newword = consonants($string);
    $response = array('consonants' => $newword);
    echo json_encode($response);
?>