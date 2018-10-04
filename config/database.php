
<?php

/****
 * https://www.codeofaninja.com/2017/02/create-simple-rest-api-in-php.html
 */

class Database
{
        //specify db connection
    private $host = "localhost:7777";
    private $db_name = "api_db";
    private $username = "root";
    private $password = "";
    private $conn;

            //get db connection
    public function getConnection(){
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "connection error:" . $exception->getMessage();
        }

        return $this->conn;
    }


}
?>