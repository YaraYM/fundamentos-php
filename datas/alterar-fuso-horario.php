<?php

  date_default_timezone_set('America/Sao_Paulo');

  $data = new DateTime();

  print_r($data); // DateTime Object ( [date] => 2021-10-15 00:00:00.000000 [timezone_type] => 3 [timezone] => America/Sao_Paulo )
  echo "<br>";