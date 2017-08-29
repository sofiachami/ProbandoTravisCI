<?php


namespace Ejemplo;

use PHPUnit\Framework\TestCase;

class TrianguloTest extends TestCase {


  public function testArea() {
    $triangulo = new Triangulo(4, 3);
    $this->assertEquals($triangulo->area(), 6);

  }

}
