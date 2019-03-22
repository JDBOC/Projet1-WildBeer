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
        //Create the mysql connection that is used to query the database
        if (mysqli_connect_errno()) die("Could not connect to the database " . $db . " : ") . mysqli_connect_error();
        else return mysqli_connect($srv, $usr, $pass, $db);
    }

    public function selectCat($cat)
    {
        //query the db on passed categorie
        $myArray = Array();
        $sql = "SELECT * FROM categorie WHERE catName LIKE '%" . $cat . "%'";
        $data = mysqli_query($this->conn, $sql);
        while ($row = $data->fetch_assoc()) {
            array_push($myArray, $row);
        }
        return $myArray;
    }

    public function addBeer($dataArr){
        // array contains [name, country, desc, gout, soif, amertume, fermentation, beerPrice, sixPackPrice, kegPrice, categorie]
        $sql = "INSERT INTO categorie (beerName, beerDesc, beerTaste, beerThirsty, beerBitterness, beerAlcohol, beerFermentation, beerPrice, sixPackPrice, kegPrice, imgName, catName)
              VALUES ($dataArr[0], $dataArr[1], $dataArr[2], $dataArr[3], $dataArr[4], $dataArr[5], $dataArr[6], $dataArr[7],
              $dataArr[8], $dataArr[9], $dataArr[10], $dataArr[11])";
        return (mysqli_query($this->conn, $sql)) ?  "Data inserted" : "An error occured nothing has been inserted";
    }

    public function close()
    {
        //close the db connection
        $this->conn->close();
        return "Connection has been closed.";
    }

}
