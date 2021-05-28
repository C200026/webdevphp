<?php
  $profiles = [];
  $profile = [];
  $profile["id"] = "00011";
  $profile["name"] = "Ichiro Tanaka";
  $profile["department"] = "HR";
  $profile["email"] = "00011@sample.com";
  $profiles[] = $profile;
  
  $profile["id"] = "00012";
  $profile["name"] = "Yukari Yamamoto";
  $profile["department"] = "Product Development Dept.";
  $profile["email"] = "00012@sample.com";
  $profiles[] = $profile;

  echo "<pre>";
  var_dump($profiles);
  echo"</pre>";


?>