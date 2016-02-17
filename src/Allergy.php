<?php
class Allergy {

    function getAllergy($score) {
        $allergiesArray = array("cats"=>"0" , "pollen"=>"0", "chocolate"=>"0" , "tomatoes"=>"0", "strawberries"=>"0", "shellfish"=>"0", "peanuts"=>"0", "eggs"=>"0" );

        $allergyScoreArray = array();

        $binScore = sprintf( "%08d", decbin($score));
        $binArray = str_split($binScore);
        $allergiesHad = array();
        $i=0;

        foreach($allergiesArray as $key=>$allergy)
        {
          if ($binArray[$i] == "1"){
            array_push($allergiesHad, $key);
          }
          ++$i;
            // $allergy = $binArray[$i];
            // echo($allergy);
            // array_push($allergyScoreArray, $allergy);
            // $i++;
        }

        // foreach ($allergyScoreArray as $allergy_exists)
        // {
        //     if ($allergy_exists == "1"){
        //         array_push($allergiesHad, $key);
        //     }
        // }
var_dump($allergiesHad);
        return $allergiesHad;
    }

} ?>
