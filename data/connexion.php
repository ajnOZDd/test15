<?php

class connexion{
    private $host  ;
    private $name ;
    private $password ;
    private $dbname ;

    function __construct($host, $dbname ,$name, $password ) {
       $this->setName($name) ;   
       $this->sethost($host) ;
       $this->setPassword($password) ;
       $this->setdbname($dbname) ;
       $this->setConnexion();
    }

    public function setName ($name){
       $this->name = $name;
    }

    public function getName (){
        return $this->name;
    }

    public function sethost ($host){
        $this->host= $host ;
    }

    public function gethost (){
        return $this-> host ;
    }

    public function setdbname($dbname){
        $this->dbname= $dbname;
    }

    public function getdbname(){
        return $this->dbname;
    }

    public function setPassword ($password){
        $this->password= $password ;
    }

    public function getPassword (){
       return $this->password ;
    }
    public function setConnexion() {
        try {
            $dsn = sprintf("pgsql:host=%s;dbname=%s", $this->gethost(), $this->getdbname());
            $query = new PDO($dsn, (string)$this->getName(),(string) $this->getPassword());
            return $query;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}

?>