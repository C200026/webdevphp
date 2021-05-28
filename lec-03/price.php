<?php
  $prices = [];
  $prices[] = 230;
  $prices[] = 220;
  $prices[] = 190;
  $total = $prices[0] + $prices[1] + $prices[2];
  $avg = $total / count($prices);
  echo "Total is {$total} <br>";
  echo "Average is {$avg} <br>";
  
  $cars = [];
  $cars[] = "ポルシェ";
  $cars[] = "フェラーリ";
  $cars[] = "ベンツ";
  echo "配列\$carsの先頭要素は{$cars[0]}です。<br>";
  echo "\$cars[1]はフェラーリです。<br>";
  print("配列\$carsは3個の要素から構成されています。<br>");
  
  $colors = array("blue", "white", "red", "brown");
  $copied_colors = $colors;
  $copied_colrs[2] = "seagreen";
  echo $colors[2];

?>