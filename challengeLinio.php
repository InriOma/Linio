<?php

class ChallengeLinio {

  public $hasta  = 100;
  private $lista = array();

  public function __contruct($hasta) {

    $this->hasta = $hasta;

  }

  public function generaNumeros() {

    for($i = 1; $i <= $this->hasta; $i++) {

      switch($i) {
        case ($i % 3) == 0:
          $lista[] = $i . ": - Linio";
          break;
        case ($i % 5) == 0:
          $lista[] = $i . ": - IT";
          break;
        default:
          $lista[] = $i;
      }

      switch($i) {
        case (($i % 3) == 0) && (($i % 5) == 0):
          $lista[] = $i . ": - Linianos";
          break;
      }

    }

    return $lista;

  }

  public function imprime($lista) {

    foreach($lista as $num) {
      print "Numero: " . $num ."\n";
    }
  }

}

$challenge = new ChallengeLinio;
$listado = $challenge->generaNumeros();
$challenge->imprime($listado);


?>