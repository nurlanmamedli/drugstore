<?php
include './Config/connect.php';
$DrugQuery  = $dataBaseLink->prepare("Select * FROM drugs");
$DrugQuery->execute();
$DrugCount = $DrugQuery->Rowcount();
$Drug = $DrugQuery->fetchall(PDO::FETCH_ASSOC);

if ($DrugCount > 0) {

    foreach ($Drug as $coloum) {
        print $coloum["ID"];
        print $coloum["Name"];
        print $coloum["Consume"];
        print $coloum["Grammage"];
        print $coloum["A.Ingredient"];
        echo " ";
        print $coloum["Price"];
        echo "<br />";
    }
    /*
    $DrugId         =$Drug["ID"];
    $DrugName       =$Drug["Name"];
    $DrugConsume    =$Drug["Consume"];
    $DrugGramage    =$Drug["Grammage"];
    $DrugIng        =$Drug["A.Ingredient"];
     */
} 
else {
    //echo "Website Drug query error";
    die();
}
