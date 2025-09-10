<?php
include 'Juice.php' ;
include 'GuavaJuice.php' ;
include 'MangoJuice.php';
include 'OrangeJuice.php';
include 'Juicer.php' ;
include 'MangoJuicer.php' ;
include 'OrangeJuicer.php' ;
include 'GuavaJuicer.php' ;

function clientCode(Juicer $juicer) {
    $juicer->serveJuice();
}

clientCode(new OrangeJuicer()); // 🍊 Orange Juice
clientCode(new MangoJuicer());  // 🥭 Mango Juice
clientCode(new GuavaJuicer());  // 🍐 Guava Juice