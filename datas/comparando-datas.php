<?php

  $dataA = new DateTime();
  $dataB = new DateTime();
  $dataC = new DateTime();

  $dataB->setDate(2025, 10, 15);

  if($dataB > $dataA) {
    echo "Data B � maior que Data A";
  } else {
    echo "Data A � maior que Data B";
  }

  // Data B � maior que Data A

  if($dataA == $dataC) {
    echo "Data A � igual a Data C";
  } else {
    echo "Data A � diferente de Data C";
  }

  // Data A � igual a Data C