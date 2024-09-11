<?php

  $cincodias = strtotime("5 days");
  echo $cincodias . "<br>"; // 1627315200

  $dezdias = strtotime("10 days");
  echo $dezdias . "<br>"; // 1627747200

  $dataAtualMaisCinco = date('d/m/y', $cincodias);
  echo $dataAtualMaisCinco . "<br>"; // 26/07/21

  $doismeses = strtotime("2 months");
  echo $doismeses . "<br>"; // 1630003200

  $dataAtualMaisDois = date('d/m/y', $doismeses);
  echo $dataAtualMaisDois . "<br>"; // 21/09/21

  echo $dozeanos = strtotime("12 years") . "<br>"; // 2033-07-21