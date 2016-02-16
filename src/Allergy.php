<?php
    class Allergy
    {

        // function scoreToBin($input)
        // {
        //     $input = decbin($input);//converts to binary<<<<<<<
        //     $input = strrev($input);//flips the array
        //     while (strlen($input) < 8) {
        //         $input .= "0";
        //     }
        //     return $input;
        // }

        function returnAllergens($input)
        {
            $allergens = array("eggs", "peanuts", "shellfish", "strawberries", "tomaters", "chocolate", "pollen", "cats");//define allergens

            $string = decbin($input);//converts to binary string<<<<<<<
            $string = strrev($string);//flips the string
            while (strlen($string) < count($allergens)) {
                $string .= "0";
            }
            $result = array();//define blank result array
            $array = str_split($string);// converts binary string into array. $string = "10010000" --> $string = array("1", "0", "0"...)
            foreach($allergens as $index => $allergy) {//for each allergy in $allergens, while tracking its index...
                if ($array[$index] == '1') {//if your string array at the positiong of index...--> $string = array("1", "0", "0"...); == 1
                    $result[$allergy] = true;//assigns into the $result array --> $result = array("eggs"=>true);
                } else {
                    $result[$allergy] = false;//assigns into the $result array --> $result = array("eggs"=>false);
                }
            }
            return $result;
        }
    }
 ?>
