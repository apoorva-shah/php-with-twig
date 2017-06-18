<?php

include 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('views/');

$twig = new Twig_Environment($loader);

$names = ['Tesla', 'Maruti', 'Tata'];

echo $twig->render('cars/list.html.twig', array('names' => $names));


