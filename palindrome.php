<?php

    $string = $_GET['string'];

    function palindromeCheck($string) {
      if (strlen($string) == 1 || strlen($string) == 0) {
        return true;
      }
      if ($string[0] == $string[strlen($string) - 1]) {
        $string = substr($string, 1, strlen($string) - 2);
        return palindromeCheck($string);
      }
      return false;
    }

      $isPalindrome = palindromeCheck($string);
      if($isPalindrome) {
        $response = array('status' => 'the string is a palindrome!');
        echo json_encode($response);
      } else {
        $response = array('status' => 'the string is not a palindrome!');
        echo json_encode($response);
      }

?>