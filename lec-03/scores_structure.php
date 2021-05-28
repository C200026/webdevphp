<?php
  $scores = [];
  $scores[0] = 81;
  $scores[1] = 79;
  $scores[2] = 78;
  $scores[3] = 74;
  $scores[4] = 80;
  
  $total = $scores[0] + $scores[1] + $scores[2] 
          + $scores[3] + $scores[4];
  
  $avg = $total / count($scores);
  
  echo "Sum: {$total} <br />";
  echo "Avg: {$avg} <br /> ";
  
  echo "<pre>";
  var_dump($scores);
  echo"</pre>";
  ?>
