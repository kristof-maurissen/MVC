<?php

//voegboektoe.php 
use VDAB\MijnProject\Business\GenreService;
use VDAB\MijnProject\Business\BoekService;
use VDAB\MijnProject\Exceptions\TitelBestaatException;
require_once "Bootstrap.php";
require_once ("Libraries/Twig/AutoLoader.php");
//require_once("business/GenreService.php"); 
//require_once("business/BoekService.php");
//require_once("Exceptions/TitelBestaatException.php");

if (isset($_GET["action"]) && $_GET["action"] == "process") { 
    try {
        
        BoekService::voegNieuwBoekToe($_POST["txtTitel"], $_POST["selGenre"]); 
        header("location: toonalleboeken.php");
        exit(0);
    } 
    catch (TitelBestaatException $ex) {
        header("location: voegboektoe.php?error=titelbestaat");
        exit(0);
    }
  
    
}else { 
    
    $genreSvc = new GenreService(); 
    $genreLijst = $genreSvc->getGenresOverzicht();
    if(isset($_GET["error"])){
        $error = $_GET["error"];
    }
  }      
    $view = $twig->render("nieuwboekForm.twig", array("genreLijst" => $genreLijst));
    print ($view);
    //include("src/VDAB/MijnProject/Presentation/nieuwboekForm.php"); 
    

