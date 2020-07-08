<?php
/*
->P representação de período: vem antes de dia, mês, ano e semana
Y anos
M meses
D dias
W semanas

-> T representação de tempo: vem antes de hora,minuto e segundo
H horas
M minutos
S segundos
*/
$data = new DateTime();

$intervalo = new DateInterval('P2Y3M5D3W-T8H9M0S'); //adicionando um intervalo de 5 minutos

$data->add($intervalo);

var_dump($data);
