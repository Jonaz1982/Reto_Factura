<?php

namespace App;

class Prueba {
  private $nombre;
  private $ciudad;

  public function __construct(string $nombre, string $ciudad)
  {
    $this->nombre = $nombre;
    $this->ciudad = $ciudad;
  }

  public function nombre()
  {
    return mb_strtoupper($this->nombre);
  }

  public function ciudad()
  {
    return $this->ciudad;
  }

  public function data(): array
  {
    return [
      'nombre' => $this->nombre(),
      'ciudad' => $this->ciudad,
    ];
  }
}
