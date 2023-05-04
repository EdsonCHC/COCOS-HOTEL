<?php
    
    class conectar{
        private $server = "localhost";
        private $user = "root";
        private $db = "hotel";
        private $password = "";

        public function conexion(){
            $conexion = mysqli_connect(
                $this->server,
                $this->user,
                $this->password,
                $this->db
            );
            return $conexion;
        }
    }



?>