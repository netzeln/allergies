<?php
class Allergy {

    function getAllergy($score) {
        $allergiesArray = array("cats"=>"" , "pollen"=>"", "chocolate"=>"" , "tomatoes"=>"", "strawberries"=>"", "shellfish"=>"", "peanuts"=>"", "eggs"=>"" );

        $allergyScoreArray = array();

        $binScore = sprintf( "%08d", decbin($score));
        $binArray = str_split($binScore);
        $allergiesHad = array();
        $i=0;
        foreach($allergiesArray as $key=>$allergy)
        {

            $allergy = $binArray[$i];
            array_push($allergyScoreArray, $allergy);
            ++$i;
        }

        foreach ($allergyScoreArray as $allergy_exists)
        {
            if ($allergy_exists == "1"){
                array_push($allergiesHad, $key);
            }
        }
        return $allergiesHad;
    }

} ?>
