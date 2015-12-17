<?php

//toonalleboeken.php 
//
use VDAB\MijnProject\Business\BoekService;
require_once ("Bootstrap.php");
require_once ("Libraries/Twig/AutoLoader.php");

    $boekSvc = new BoekService(); 
    $boekenLijst = $boekSvc->getBoekenOverzicht(); 
    
    $view = $twig->render("boekenLijst.twig", array("boekenLijst" => $boekenLijst));
    print($view);
    //include("src/VDAB/MijnProject/Presentation/boekenLijst.php");

