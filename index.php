<?php 

// echo "<p>hello world. This is v2</p>" ;
// echo "<p> Password is " . getenv('DB_PASSWORD');

class DBike{
public $bike;
public $number;
public $name;
}

$listofBikes = [];

for($i=0; $i < getenv('LOOP_AMOUNT'); $i++){

    $bike = new DBike;
    $bike->number=$i;
    $bike->name= "Name $i";

$listofBikes[]=$bike;
}


header('Content-Type: application/json');

$jsonOutput = json_encode($listofBikes);

echo $jsonOutput;