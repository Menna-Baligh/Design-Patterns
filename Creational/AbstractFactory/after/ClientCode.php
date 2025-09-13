<?php
include 'Button.php' ;
include 'Checkbox.php' ;
include 'MacButton.php' ;
include 'MacCheckbox.php' ;
include 'WinButton.php' ;
include 'WinCheckbox.php' ;
include 'GUIFactory.php';
include 'WinFactory.php' ;
include 'MacFactory.php' ;
include 'Application.php' ;
include 'ApplicationConfigurator.php';



$app = ApplicationConfigurator::configure("Windows");
$app->renderUI();

$app = ApplicationConfigurator::configure("Mac");
$app->renderUI();