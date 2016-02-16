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
    }
?>
