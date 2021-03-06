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
    $this->assertEquals(array("eggs"), $result);
    }

    function test_getAllergy_2() {
    //Arrange
    $test_allergy = new Allergy;
    $score = 2;

    //Act
    $result = $test_allergy->getAllergy($score);

    //assert
    $this->assertEquals(array("peanuts"), $result);
    }

    function test_getAllergy_3() {
    //Arrange
    $test_allergy = new Allergy;
    $score = 3;

    //Act
    $result = $test_allergy->getAllergy($score);

    //assert
    $this->assertEquals(array("peanuts", "eggs"), $result);
    }

    function test_getAllergy_129() {
    //Arrange
    $test_allergy = new Allergy;
    $score = 129;

    //Act
    $result = $test_allergy->getAllergy($score);

    //assert
    $this->assertEquals(array("cats", "eggs"), $result);
    }
}
 ?>
