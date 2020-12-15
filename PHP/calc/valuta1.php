<?php
$bel = $_POST["bel"];
$dol=$bel*2.65;
$euro=$bel*3.25;
$rus=$bel*2.11;
echo 'USD  '.$dol.'<br>';
echo 'EUR  '.$euro.'<br>';
echo 'RUB  '.$rus.'<br>';