<?php
require "data/connexion.php" ;

class index_function {
    private connexion $connect ;
    
    public function __construct() {
        
    }

    public function makeconnection (){
     $this->connect = new connexion("localhost","projetrojo","allan", "etherion") ;
     
    }
}


