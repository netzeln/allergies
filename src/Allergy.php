<?php
class Allergy {

    function getAllergy($score) {
        $binScore = decbin($score);
        $binArray = str_split($binScore);
        echo $binScore;
        var_dump($binArray);
    }

} ?>
