<?php
	$host = "servermysqlmuseai.mysql.database.azure.com";/* Host name */
	$user = "admintest@servermysqlmuseai";/* User */
	$password = "Merciful#100";/* Password */
	$dbname = "images";/* Database name */

	$conn = new PDO('mysql:host=servermysqlmuseai.mysql.database.azure.com;dbname=images', 'admintest@servermysqlmuseai', 'Merciful#100');
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>


<?php 
    //session_start();

    //DB
    class DB{

        private $dbh;
        
        private $server = "servermysqlmuseai.mysql.database.azure.com";
        private $username = "admintest@servermysqlmuseai";
        private $password = "Merciful#100";
        private $dbname = "images";

        //Constructor
        function __construct(){

            $this->dbh = null;
            try{
                $this->dbh = new PDO("mysql:host=" . $this->server . ";dbname=" . $this->dbname, $this->username, $this->password);
                $this->dbh->exec("set names utf8");

                //SSL issues....
                // $options = array(
                //     PDO::MYSQL_ATTR_SSL_CA => '/var/www/html/BaltimoreCyberTrustRoot.crt.pem'
                // );
                // $this->dbh = new PDO("mysql:host=" . $this->server . ";dbname=" . $this->dbname, $this->username, $this->password, $options);
                
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $this->dbh;

        }//End of function constructor

        //Get all museais=
        function get_museais(){
            try{
                $data = array();
                $query = "select * from image";
                $stmt = $this->dbh->prepare($query);
                $stmt->execute();
                while($row = $stmt->fetch()){
                    $data[] = $row;
                }
                //dbh->close();
                return $data;
            }catch(PDOException $pe){
                echo $pe->getMessage();
                return[];
           }
        }
    }
?>



