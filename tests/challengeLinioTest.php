<?php

require __DIR__ . "/../Controllers/ChallengeLinio.php";

use PHPUnit\Framework\TestCase;
use App\Controllers\ChallengeLinio;

class ChallengeLinioTest extends TestCase
{

  public function testGeneraTodoListado() {

    $challenge = new ChallengeLinio(100);
    $lista = array();
    $this->assertEquals(0, count($lista));
    //array_push($lista, 'foo');
    $listado = $challenge->generaNumeros();
    $this->assertIsArray($listado);
    $this->assertEquals(106, count($listado));

  }
}

?>