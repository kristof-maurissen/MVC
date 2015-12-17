<?php

//VDAB/MijnProject/verwijderboek.php

use VDAB\MijnProject\Business\BoekService;

require_once ("Bootstrap.php");
//require_once("business/BoekService.php"); 

$boekSvc = new BoekService(); 
$boekSvc->verwijderBoek($_GET["id"]);


header("location: toonalleboeken.php"); 

exit(0);
