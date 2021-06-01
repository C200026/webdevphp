<?php
$scores = [];
$scores[] = 81;
$scores[] = 79;
$scores[] = 78;
$scores[] = 74;
$scores[] = 80;

$i = 0;
while ($i < count($scores)){
    echo "{$i} : {$scores[$i]} <br />";
    $i++;
};

for ($i = 0; $i < count($scores); $i++){
    echo "{$i} : {$scores[$i]} <br /> ";
};

foreach ($scores as $sc){
    echo "{$sc} <br />";
};

$score = [];
$score["language"] = 81;
$score["math"] = 79;
$score["english"] = 78;
$score["society"] = 74;
$score["science"] = 80;

foreach ($score as $sc2){
    echo "{$sc2} <br />";
};

foreach ($score as $key => $value){
    echo "{$key} : {$value} <br />";
};



?>