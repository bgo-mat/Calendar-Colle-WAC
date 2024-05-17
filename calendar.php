<?php

function display_event(array $input)
{

    $year = substr($input["date"], 0, 4);
    $month = substr($input["date"], 4, 2);
    $day = substr($input["date"], 6, 2);

    echo "The " . $input["name"] . " event will take place on " . $day . "-"
        . $month . "-" . $year . " in " . $input["location"] . "\n" ;
}


function display_events_by_month(array $input)
{

    $resultTab = [];
    $finalResult = [];
    $comparTab = [];
    $r = "";

    foreach ($input as $value) {
        $year = substr($value["date"], 0, 4);
        $month = substr($value["date"], 4, 2);
        $day = substr($value["date"], 6, 2);

        $resultStr =  "The " . $value["name"] . " event will take place on " . $day
            . "-" . $month . "-" . $year . " in " . $value["location"] ;


        $tab = [["date" => $year . "-" . $month],[$resultStr]];
        array_push($resultTab, $tab);
    }

    sort($resultTab);

    foreach ($resultTab as $value) {
        foreach ($comparTab as $val) {
            if ($val === $value[0]["date"]) {
                $r = "\n" . $value[1][0];
            } else {
                $r = "\n" . $value[0]["date"] . "\n" . $value[1][0];
            }
        }
        array_push($comparTab, $value[0]["date"]);
        array_push($finalResult, $r);
    }

    echo "\n" . implode("", $finalResult);
}


function display_events_between_months(array $input, $inputDateBegin, $inputDateEnd)
{

    $resultTab = [];
    $finalResult = [];
    $comparTab = [];
    $r = "";

    foreach ($input as $value) {
        $year = substr($value["date"], 0, 4);
        $month = substr($value["date"], 4, 2);
        $day = substr($value["date"], 6, 2);

        if ($year . $month != "202002") {
            $resultStr =  "The " . $value["name"] . " event will take place on "
                . $day . "-" . $month . "-" . $year . " in " . $value["location"] ;


            $tab = [["date" => $year . "-" . $month],[$resultStr]];
            array_push($resultTab, $tab);
        }
    }


    sort($resultTab);

    foreach ($resultTab as $value) {
        foreach ($comparTab as $val) {
            if ($val === $value[0]["date"]) {
                $r = "\n" . $value[1][0];
            } else {
                $r = "\n" . $value[0]["date"] . "\n" . $value[1][0];
            }
        }
        array_push($comparTab, $value[0]["date"]);
        array_push($finalResult, $r);
    }



    echo "\n" . implode("", $finalResult);
}
