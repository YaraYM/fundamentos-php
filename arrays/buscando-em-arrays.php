<?php

  $arr = ['banana', 'maчу', 'batata', 'pъra', 'mamуo'];

  if(in_array('batata', $arr)) {
    echo "A batata estс no array";
  } else {
    echo "A batata nуo estс no array";
  }

  $b = 'banana';

  if(in_array($b, $arr)) {
    echo "A $b estс no array";
  } else {
    echo "A $b nуo estс no array";
  }