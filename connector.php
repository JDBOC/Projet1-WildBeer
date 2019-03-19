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

         const DB = "project_wild_beer";
         const SERVER = 'localhost';
         const USER = 'root';
         const PASS = '';

         public function __construct()
         {
             $this->conn = buildConnector(SERVER, DB, USER, PASS);
         }


         public function buildConnector($srv, $db, $usr, $pass)
         {
             try{
               return new PDO("mysql:host=$srv;dbName=$db", $usr, $pass);
             }catch (PDOException $pe){
               die("Could not connect to the database ".DB." : ".$pe->getMessage());
             }
         }

         public function selectCat($cat){
           $sql = "SELECT * FROM categorie WHERE catName=".$cat.";";
           return $this->conn->query($sql)->setFetchMode(PDO::FETCH_ASSOC);
         }

     }
