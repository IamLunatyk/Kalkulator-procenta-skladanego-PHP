<?php
    header("Content-Type: application/json");

    function calculateCompoundIntrest($principal, $rate, $time){
        $result = [];

        for($year = 1; $year <= $time; $year++ ){
            $amount = $principal * pow((1 + $rate / 100), $year);
            $result[] = array("year" => $year, "amount" => round($amount, 2) );
        }
        return $result;
    }

    $principal = $_GET["principal"] ?? 0;
    $rate = $_GET["rate"] ?? 0;
    $time = $_GET["time"] ?? 0;

    echo json_encode(calculateCompoundIntrest($principal, $rate, $time));
?>