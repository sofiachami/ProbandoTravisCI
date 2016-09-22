<?php

namespace Ejemplo;

class Triangulo {

  protected $base;
  
  protected $altura;

  function __construct($base, $altura) {
    $this->base = $base;
    $this->altura = $altura;
  }

  function area() {
    return $this->base * $this->altura / 2;
  }

}
