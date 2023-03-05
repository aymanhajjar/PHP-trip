<?php

    $year = $_GET['year'];
    $age = 2023 - $year;

    
    function isPrime($num) {
        if ($num < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
        }
        return true;
    }

    function isEven($num) {
        return $num % 2 == 0;
    }

    $response = array(
        'age' => $age,
        'is_prime' => isPrime($age),
        'is_even' => isEven($age)
      );
      echo json_encode($response);

?>