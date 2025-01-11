<?php

include "connection.php";

class DB
{

    public static function select($query)
    {


        $result = Connection::connection()->query($query);

        $db_response = array();

        while ($row = $result->fetch_assoc()) {

            array_push($db_response, $row);
        }


        return $db_response;


    }

    public static function insert($query)
    {

        $result = Connection::connection()->query($query);

        if (!$result) {

            return false;
        }

        return true;

    }

    public static function delete($query)
    {
        $result = Connection::connection()->query($query);
        if (!$result) {

            return false;
        }

        return true;

    }

    public static function edit($query)
    {
        $result = Connection::connection()->query($query);
        if (!$result) {
            return false;
        } else {
            return true;
        }
    }




    public static function find_select($query)
    {
        $result = Connection::connection()->query($query);
        if ($result->num_rows > 0) {
            return false;
        } else {
            return true;
        }
    }


}

?>