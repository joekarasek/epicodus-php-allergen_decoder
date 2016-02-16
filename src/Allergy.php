<?php
    class Allergy
    {
        
        // function quarters($input)
        function scoreToBin($input)
        {
            $input = decbin($input);//converts to binary
            $input = strrev($input);//flips the array
            while (strlen($input) < 8) {
                $input .= "0";
            }
            return $input;
        }

    }
 ?>
