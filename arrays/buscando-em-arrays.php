<?php

  $arr = ['banana', 'ma��', 'batata', 'p�ra', 'mam�o'];

  if(in_array('batata', $arr)) {
    echo "A batata est� no array";
  } else {
    echo "A batata n�o est� no array";
  }

  $b = 'banana';

  if(in_array($b, $arr)) {
    echo "A $b est� no array";
  } else {
    echo "A $b n�o est� no array";
  }