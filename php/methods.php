<?php

class methods
{

    /**
     * Insert the data passed by an array into the database
     */
    public function insertData($datos)
    {
        $c = new conectar();

        $conection = $c->conexion();

        $sql = "INSERT INTO reservas (name, lastname, phone, dui, room, date, time, code)
                    VALUES ('$datos[0]','$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]', '$datos[7]')";

        return $result = mysqli_query($conection, $sql);
    }

    public function showData($sql)
    {
        $c = new conectar();

        $conection = $c->conexion();

        $result = mysqli_query($conection, $sql);

        return mysqli_fetch_all($result, MYSQL_ASSOC);
    }

}


?>