<?php
include 'Juicer.php' ;
include 'OrangeJuice.php'; 
include 'MangoJuice.php';
include 'GuavaJuice.php';

$juicer = new Juicer();
$juicer->serveJuice("orange");
$juicer->serveJuice("mango");
$juicer->serveJuice("guava");