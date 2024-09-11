<?php

  $dataA = new DateTime();
  $dataB = new DateTime();
  $dataC = new DateTime();

  $dataB->setDate(2025, 10, 15);

  if($dataB > $dataA) {
    echo "Data B é maior que Data A";
  } else {
    echo "Data A é maior que Data B";
  }

  // Data B é maior que Data A

  if($dataA == $dataC) {
    echo "Data A é igual a Data C";
  } else {
    echo "Data A é diferente de Data C";
  }

  // Data A é igual a Data C