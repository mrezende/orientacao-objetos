<?php

require 'lib/Carbon.php';
require 'CartaoDeCredito.php';

use Carbon\Carbon;

$cartao = new CartaoDeCredito();
$cartao->numero = 55555;
$cartao->dataDeValidade =
  Carbon::createFromDate(2022, 3, 7,
  'America/Sao_Paulo');

echo "Número: $cartao->numero" . PHP_EOL;
echo "Validade: {$cartao->dataDeValidade->format('d/m/Y')}" . PHP_EOL;
