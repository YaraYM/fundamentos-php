<?php

  $dataNascimento = mktime(11, 10, 10, 8, 4, 1992);
  echo $dataNascimento . "<br>"; // 711235810

  $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);
  echo $dataNascimentoFormatada . "<br>"; // 04/08/1992