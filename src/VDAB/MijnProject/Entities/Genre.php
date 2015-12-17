<?php
//src/VDAB/MijnProject/Entities/Genre.php

namespace VDAB\MijnProject\Entities;

class Genre {
    
    private static $idMap = array();
    
    private $id;
    private $genre;
    
    private function __construct($id, $genre) {
        
        $this->id = $id;
        $this->genre = $genre;
    }
    public static function create($id, $genre) {
        
        if (!isset(self::$idMap[$id])) { 
            self::$idMap[$id] = new Genre($id, $genre); 
            }
        return self::$idMap[$id]; 
    }
    public function getId() {
        return $this->id;            
    } 

    public function getGenre () { 
        return $this->genre; 
    } 

    public function setGenre ($genre) { 
        $this->genre = $genre; 
    } 

}    
            
   


