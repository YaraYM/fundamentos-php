<?php

// data atual
  $data = new DateTime();

  echo $data->format('d/m/y') . "<br>"; // 21/07/21

  echo $data->format('D - M - Y') . "<br>"; // Wed - Jul - 2021

  // data + 5 dias
  $data->modify('+5 day');

  echo $data->format('d/m/y') . "<br>"; // 26/07/21

  $data->modify('+2 months');

  echo $data->format('d/m/y') . "<br>"; // 26/09/21

  $data->modify('-3 years');

  echo $data->format('d/m/y') . "<br>"; // 26/09/18


