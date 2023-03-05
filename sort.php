<?php

    $string = $_GET['numbers'];
    $numbers = explode(',', $string);

    function selectionSort($arr) {
      
        for ($i = 0; $i < count($arr)-1; $i++) {
          $min_index = $i;
      
          for ($j = $i+1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min_index]) {
              $min_index = $j;
            }
          }
      
          if ($min_index != $i) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$min_index];
            $arr[$min_index] = $temp;
          }
        }
      
        return $arr;
      }

      $sorted = selectionSort($numbers);
      $response = array('sorted_numbers' => $sorted);
      echo json_encode($response);

?>