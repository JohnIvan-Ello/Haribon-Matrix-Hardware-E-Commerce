<?php
class CreateDb
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $con;

    // class constructor
    public function __construct(
        $dbname = "Productdb",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
        $this->dbname = $dbname;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        // create connection
        $this->con = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$this->con) {
            die("Connection failed : " . mysqli_connect_error());
        }

        // create database if not exists
        $this->createDatabase();

        // create tables if not exists
        $this->createTable("handtools");
        $this->createTable("housew");
        $this->createTable("lawn");
        $this->createTable("paints");
    }

    // create database if not exists
    private function createDatabase()
    {
        $sql = "CREATE DATABASE IF NOT EXISTS $this->dbname";

        if (!mysqli_query($this->con, $sql)) {
            echo "Error creating database : " . mysqli_error($this->con);
        }

        // switch to the newly created database
        $this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
    }

    // create table if not exists
    private function createTable($tablename)
    {
        $sql = "CREATE TABLE IF NOT EXISTS $tablename
                (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                 product_name VARCHAR(25) NOT NULL,
                 product_price FLOAT,
                 product_image VARCHAR(100)
                )";

        if (!mysqli_query($this->con, $sql)) {
            echo "Error creating table : " . mysqli_error($this->con);
        }
    }

    // get product from the database
    public function getData($tablename)
    {
        $sql = "SELECT * FROM $tablename";
        $result = mysqli_query($this->con, $sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        }
    }
}

// Usage example:
$db = new CreateDb("Productdb", "localhost", "root", "");

// Retrieve data from a specific table
$result = $db->getData("handtools");
while ($row = mysqli_fetch_assoc($result)) {
    // Process each row
}

?>
