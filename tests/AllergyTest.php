<?php
    require_once "src/Allergy.php";

class  AllergyTest extends PHPUnit_Framework_TestCase
{
    function test_getAllergy() {
    //Arrange
    $test_allergy = new Allergy;
    $score = 1;

    //Act
    $result = $test_allergy->getAllergy($score);

    //assert
    $this->assertEquals(array("Eggs"), $result);
    }
}
 ?>
