<?php

class Curso
{

  public $nome; // atributos
  public $sala;

}

$curso = new Curso();
$curso->nome = "Algoritmos em Java";
$curso->sala = "B05";


echo "Nome do curso: $curso->nome" . PHP_EOL;
echo "Sala: $curso->sala" . PHP_EOL;
