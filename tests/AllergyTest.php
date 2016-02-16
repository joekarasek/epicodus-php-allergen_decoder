<?php
    require_once __DIR__ . '/../src/Allergy.php';

    class AllergyTest extends PHPUnit_Framework_TestCase
    {
        function test_scoreToBin()
        {
            //arrange
            $test_Allergy = new Allergy;
            $input = 9;

            //act
            $result = $test_Allergy->scoreToBin($input);

            //assert
            $this->assertEquals("10010000", $result);
        }

        function test_returnAllergens()
        {
            //arrange
            $test_Allergy = new Allergy;
            $input = "10010000";

            //act
            $result = $test_Allergy->returnAllergens($input);

            //assert
            $this->assertEquals(array("eggs"=>true, "peanuts"=>false, "shellfish"=>false, "strawberries"=>true, "tomatoes"=>false, "chocolate"=>false, "pollen"=>false, "cats"=>false), $result);
        }
    }
?>
