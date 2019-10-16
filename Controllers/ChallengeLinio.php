<?php

namespace App\Controllers;

class ChallengeLinio
{

  private $hasta;
  private $lista = array();

  public function __construct($hasta) {

    $this->hasta = $hasta;

  }

  public function generaNumeros() {

    for($i = 1; $i <= $this->hasta; $i++) {

      switch($i) {
        case ($i % 3) == 0:
          $this->lista[] .= $i . ": - Linio";
          break;
        case ($i % 5) == 0:
          $this->lista[] .= $i . ": - IT";
          break;
        case (($i % 3) == 0) && (($i % 5) == 0):
          $this->lista[] .= $i . " - Linianos";
          break;
        default:
          $this->lista[] = $i .":";
      }

      switch($i) {
        case (($i % 3) == 0) && (($i % 5) == 0):
          $this->lista[] .= $i . ": - Linianos";
          break;

      }

    }

    return $this->lista;

  }

  public function imprime($lista) {

    foreach($lista as $num) {
      print "Numero: " . $num . "\n";
    }
  }

}

$challenge = new ChallengeLinio(100);
$listado = $challenge->generaNumeros();
$challenge->imprime($listado);


?>