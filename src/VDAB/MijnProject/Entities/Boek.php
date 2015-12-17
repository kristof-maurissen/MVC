<?php

//src/VDAB/MijnProject/Entities/Boek.php 

namespace VDAB\MijnProject\Entities;

class Boek { 
    
    private static $idMap = array(); 
    
    private $id; 
    private $titel; 
    private $genre_id;
    
    private function __construct($id, $titel, $genre_id) {
        
        $this->id = $id; 
        $this->titel = $titel; 
        $this->genre_id = $genre_id;   
    } 
    
    public static function create($id, $titel, $genre_id) { 
        
        if (!isset(self::$idMap[$id])) { 
            self::$idMap[$id] = new Boek($id, $titel, $genre_id); 
            } 
        return self::$idMap[$id]; 
        
        }
    public function getId() {
        return $this->id;
        
    } 
    public function getTitel() { 
        return $this->titel; 
        
    } 
    public function getGenre() { 
        return $this->genre_id; 
        
    } 
    public function setTitel($titel) { 
        $this->titel = $titel; 
        
    } public function setGenre($genre_id) {
        $this->genre_id = $genre_id; 
        
    } 
    
}

