<?php

  $data = new DateTime();

  print_r($data); // DateTime Object ( [date] => 2021-07-21 00:00:00.000000 [timezone_type] => 3 [timezone] => America/Sao_Paulo )
  echo "<br>";

  $data->setDate(2021, 12, 25);

  print_r($data); // DateTime Object ( [date] => 2021-12-25 00:00:00.000000 [timezone_type] => 3 [timezone] => America/Sao_Paulo )
  echo "<br>";

  $data->setTime(05, 12, 10);

  print_r($data); // DateTime Object ( [date] => 2021-12-25 05:12:10.000000 [timezone_type] => 3 [timezone] => America/Sao_Paulo )
  echo "<br>";

 echo $data->format('d/m/y') . "<br>"; // 25/12/21