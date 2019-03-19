<?php
     //php 7.3.0


     class Connector
     {

       /*The class Connector is going to handle the db connection and queries.
       *Takes the no parameters for the __construct method.
       *
       *The selectCat method use the cat passed on parameter to return
       *an array containing all the products from this categorie.
       */

         private $conn;

         private $bd = "project_wild_beer";
         private $server = '127.0.0.1';
         private $user = 'root';
         private $password = 'oversniper419';

         public function __construct()
         {
             $this->conn = $this->buildConnector($this->server, $this->bd, $this->user, $this->password);
         }


         public function buildConnector($srv, $db, $usr, $pass)
         {
             try{
               return new PDO("mysql:host=$srv;dbName=$db", $usr, $pass);
             }catch (PDOException $pe){
               die("Could not connect to the database ".$db." : ".$pe->getMessage());
             }
         }

         public function selectCat($cat){
           $sql = "SELECT * FROM categorie WHERE catName=".$cat.";";
           return $this->conn->query($sql)->setFetchMode(PDO::FETCH_ASSOC);
         }

     }
