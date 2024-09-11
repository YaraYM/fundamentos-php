<?php

  $dataA = new DateTime();
  $dataB = new DateTime();

  $dataB->setDate(2001, 10, 15);

  print_r($dataA); // DateTime Object ( [date] => 2021-07-21 00:00:00.000000 [timezone_type] => 3 [timezone] => America/Sao_Paulo ) 
  echo "<br>";
  print_r($dataB); // DateTime Object ( [date] => 2001-10-15 00:00:00.000000 [timezone_type] => 3 [timezone] => America/Sao_Paulo )
  echo "<br>";

  $diferenca = $dataA->diff($dataB);
  print_r($diferenca); // DateInterval Object ( [y] => 20 [m] => 9 [d] => 6 [h] => 0 [i] => 0 [s] => 0 [f] => 0 [weekday] => 0 [weekday_behavior] => 0 [first_last_day_of] => 0 [invert] => 1 [days] => 7516 [special_type] => 0 [special_amount] => 0 [have_weekday_relative] => 0 [have_special_relative] => 0 )
  echo "<br>";

  echo $diferenca->format('%y anos, %m meses e %d dias'); // 20 anos, 9 meses e 6 dias
  echo "<br>";

  echo $diferenca->format("%y dias"); // 7516 dias