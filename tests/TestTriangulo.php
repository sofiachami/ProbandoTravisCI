<?php


namespace Ejemplo;

use PHPUnit\Framework\TestCase;

class TrianguloTest extends TestCase {


  public function testArea() {

    $triangulo = new Triangulo(2, 3);
    $this->assertEquals($triangulo->area(), 3);

  }

}
