<?php

class methods
{
    public function insertData($datos){
        $c = new conectar();

        $conection = $c->conexion();

        $sql = "INSERT INTO reservas (name, lastname, phone, room, date, time, code)
                    VALUES ('$datos[0]','$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]')";

        return $result = mysqli_query($conection,$sql);
    }

  






}





?>