<?php

  class Humano {

  }

  class Animal {

  }

  class Professor extends Humano {

  }

  $marcos = new Humano;

  $turca = new Animal;

  if($marcos instanceof Humano) {
    echo "Marcos � um Humano <br>";
  } else {
    echo "Marcos n�o � um Humano <br>";
  }

  if($turca instanceof Humano) {
    echo "Turca � um Humano <br>";
  } else {
    echo "Turca n�o � um Humano <br>";
  }

  $pedro = new Professor;

  if($pedro instanceof Professor) {
    echo "Pedro � um Professor <br>";
  } else {
    echo "Pedro n�o � um Professor <br>";
  }

  if($pedro instanceof Humano) {
    echo "Pedro � um Humano <br>";
  } else {
    echo "Pedro n�o � um Humano <br>";
  }

  if($turca instanceof Professor) {
    echo "Turca � um Professor <br>";
  } else {
    echo "Turca n�o � um Professor <br>";
  }

  // Marcos � um Humano
  // Turca n�o � um Humano
  // Pedro � um Professor
  // Pedro � um Humano
  // Turca n�o � um Professor