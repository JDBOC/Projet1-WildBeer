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

         private $db = "PWB";
         private $server = '127.0.0.1';
         private $user = 'root';
         private $password = 'oversniper419';

         public function __construct()
         {
             $this->conn = $this->buildConnector($this->server, $this->db, $this->user, $this->password);
         }


         public function buildConnector($srv, $db, $usr, $pass)
         {
             if(mysqli_connect_errno()) die("Could not connect to the database ".$db." : ") . mysqli_connect_error();
             else return mysqli_connect($srv, $usr, $pass, $db);
         }

         public function selectCat($cat){
           $myArray = Array();
           $sql = "SELECT * FROM categorie WHERE catName LIKE '%".$cat."%'";
           $data = mysqli_query($this->conn, $sql);
           while($row = $data->fetch_assoc()){
             array_push($myArray, $row);
           }
           return $myArray;
         }

         public function close(){
           $this->conn->close();
           return "Connection has been closed.";
         }

     }
