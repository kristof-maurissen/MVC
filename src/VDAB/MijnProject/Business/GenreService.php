<?php

//src/VDAB/MijnProjectbusiness/GenreService.php 
namespace VDAB\MijnProject\Business;
use VDAB\MijnProject\Data\GenreDAO;
//require_once("data/GenreDAO.php"); 

class GenreService { 
    
    public function getGenresOverzicht() { 
        
        $genreDAO = new GenreDAO(); 
        $lijst = $genreDAO->getAll(); 
        return $lijst; 
        
    } 
    
}

