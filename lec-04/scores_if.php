<?php
$scores = [];
$scores[] = 81;
$scores[] = 79;
$scores[] = 78;
$scores[] = 74;
$scores[] = 80;

if ($score[2] >= 80){
    echo "Great Work!";
} elseif ($scores[2] >= 60){
    echo "Good Job!";
} else {
    echo "Study Hard!";
};

echo "<pre>";
var_dump($scores);
echo "</pre>"

?>