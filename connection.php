<?php
class Connection {
 

    protected static $conn=null;
   
    public function __construct() { 

        self::$conn=$this::connection();

    }

  
    public static function &connection() {


        if (self::$conn==NULL){
         
           $db_servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $db_database = "mobilni";

            self::$conn=new mysqli($db_servername,$db_username,$db_password,$db_database);
            if (self::$conn->connect_errno){

                die("failed to connect");
            }
            self::$conn->set_charset("utf8");



        }


        // $obj = new Connection();

        
        // $conn = new mysqli($obj->db_servername, $obj->db_username, $obj->db_password, $obj->db_database);
        // $conn->set_charset("utf8");

       
        // if ($conn->connect_error) {
        
        //     die("Connection error");
        // }

        return self::$conn;
    }


    // public static function get(string $sql): ?mysqli_result {
    //     $conn = Connection::connection();
    //     $result = $conn->query($sql);
    //     $conn->close();
    //     return $result;
    // }

 
}

?>
