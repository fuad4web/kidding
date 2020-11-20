<?php 
    class createDB {
        // initialise variables
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename;
        public $conn;

        //class constructor
        public function __construct(
            //assign variables
            $dbname = "cartDB",
            $tablename = "productDB",
            $servername = "localhost",
            $username = "root",
            $password = ""
        ) {
            //linking it up with database names
            $this->dbname = $dbname;
            $this->tablename = $tablename;
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;

            //create connection
            //this mysqli connection open connection to server
            $this->conn = mysqli_connect($servername, $username, $password);

            //check connection
            if(!$this->conn) {
                die("Connection failed: ".mysqli_connect_error());
            }

            // $query, to create a new database
            $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

            //execute query
            if(mysqli_query($this->conn, $sql)) {
                //connecting just created database name to connection property
                $this->conn = mysqli_connect($servername, $username, $password, $dbname);
                
                // $sql to create new table
                $sql = "CREATE TABLE IF NOT EXISTS $tablename
                (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                product_name VARCHAR(25) NOT NULL,
                product_price FLOAT,
                product_image VARCHAR(100)
                );";
                /*
                    // product_strike FLOAT, this was supposed to be included, fuckup
                */
                if(!mysqli_query($this->conn, $sql)) {
                    echo "Error creating table: ".mysqli_error($this->conn);
                }
            } else {
                return false;
            }
        }

        // get data from the database, it also return the result variables
        public function getValues() {
            $sql = "SELECT * FROM $this->tablename";
            $result = mysqli_query($this->conn, $sql);

            if(mysqli_num_rows($result) > 0) {
                return $result;
            }
        }
    }