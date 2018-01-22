<?php

require 'lib/Carbon.php';

use Carbon\Carbon;

$cartao = new CartaoDeCredito();
$cartao->numero = 55555;
$cartao->dataDeValidade = "22/03/2022";

echo "Número: $cartao->numero" . PHP_EOL;
echo "Validade: $cartao->dataDeValidade" . PHP_EOL;
