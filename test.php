<?php 
//test.php 
/*require_once("data/BoekDAO.php"); 
$dao = new BoekDAO(); 
$lijst = $dao->getAll(); 
print("<pre>"); 
print_r($lijst); 
print("</pre>");
 * 
 
require_once("data/GenreDAO.php"); 
$dao = new GenreDAO(); 
$lijst = $dao->getAll(); 
print("<pre>"); 
print_r($lijst); 
print("</pre>");

require_once("business/BoekService.php"); 
$boekSvc = new BoekService(); 
$lijst = $boekSvc->getBoekenOverzicht(); 
print("<pre>"); 
var_dump($lijst); 
print("</pre>");


//test.php 
require_once("data/BoekDAO.php"); 
$dao = new BoekDAO(); 
$boek = $dao->getById(4); 
print("<pre>"); 
print_r($boek); 
print("</pre>");
*/
/*require_once("data/GenreDAO.php"); 
$dao = new GenreDAO(); 
$boek = $dao->getById(2); 
print("<pre>"); 
print_r($boek); 
print("</pre>");*/



$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);
