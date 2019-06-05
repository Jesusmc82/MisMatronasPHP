<?php

    require_once "Database.php";

    class usuarios {
        private $idUser;
        private $nombre;
        private $apellidos;
        private $dni;
        private $nacimiento;
        private $password;
        private $direccion;
        private $tipoUser;
    
        public function setidUser($idU) {
            $this->idUser= $idU;
        }

        public function setnombre($nom) {
            $this->nombre= $nom;
        }

        public function setapellidos($apl) {
            $this->apellidos= $apl;
        }

        public function setdni($iden) {
            $this->dni= $iden;
        }

        public function setnacimiento($ncm) {
            $this->nacimiento= $ncm;
        }

        public function setpassword($psw) {
            $this->password= $psw;
        }


        public function setdireccion($drc) {
            $this->direccion= $drc;
        }


        public function settipoUser($tpu) {
            $this->tipoUser= $tpu;
        }

        public function settelefono($tlf) {
            $this->telefono= $tlf;
        }

        public function getidUser() {
            return $this->idUser;
        }

        public function getnombre() {
            return $this->nombre;
        }

        public function getapellidos() {
            return $this->apellidos;
        }

        public function getdni() {
            return $this->dni;
        }

        public function getnacimiento() {
            return $this->nacimiento;
        }

        public function getpassword() {
            return $this->password;
        }

        public function getdireccion() {
            return $this->direccion;
        }

        public function gettipoUser() {
            return $this->tipoUser;
        }

        public function gettelefono() {
            return $this->telefono;
        }


        public function __construct(){

        }

        public function listado() {

            $db = Database::getInstance();
            $db->query('SELECT * FROM usuarios;');
            $datos=[];
            while($item = $db->getRow('usuarios')):
                array_push($datos,$item);
            endwhile;
            return $datos;

        }

        public function agregar() {
            // $psw_cifrado=password_hash($psw, PASSWORD_DEFAULT);
            $db = Database::getInstance();
            $db->query('INSERT INTO usuarios(nombre, apellidos, dni, nacimiento, tipoUser, `password`, telefono) VALUES (:nom, :apl, :iden, :ncm, :tpu, :psw, :tlf);',
                        [":nom" =>$this->nombre,
                         ":apl" =>$this->apellidos,
                         ":iden" =>$this->dni,
                         ":ncm" =>$this->nacimiento,
                         ":tpu" =>$this->tipoUser,
                         ":tlf"=>$this->telefono,
                         ":psw_cifrado" =>$this->password]);
                    $this-> idUser - $db->getLastId();   
        }

        public function delete() {
            $db = Database::getInstance();
            $db->query('DELETE FROM usuarios WHERE idUser= :idU',
                        [":idU" =>$this->idUser]);
        }

        public function deleteUsuarios($id) {
            $db = Database::getInstance();
            $db->query('DELETE FROM usuarios WHERE idUser = :idU',
                        [":idU" => $id]);
        }

        public function update() {
            $db = Database::getInstance();
            $db->query('UPDATE usuarios SET nombre=:nom , apellidos=:apl, dni=:iden, nacimiento=:ncm WHERE idUser=:idU',
                        [":idU" => $this->idUser,
                        ":nom" => $this->nombre,
                        ":apl" => $this->apellidos,
                        ":iden" => $this->dni,
                        ":ncm" => $this->nacimiento]);
        }

        public function listadovariado() {
            $db = Database::getInstance();
            $db->query('SELECT usuarios.nombre, historial_clinico.nhc, historial_clinico.evolucion, historial_clinico.observaciones FROM usuarios INNER JOIN historial_clinico ON historial_clinico.idUser=usuarios.idUser where usuarios.idUser=historial_clinico.idUser ;');
            $datos=[];
            while($item = $db->getRow('historial_clinico')):
                array_push($datos,$item);
            endwhile;
            return $datos;
        }

        public static function obtenerUsuario($id) {
            $db = Database::getInstance();
            $db->query('SELECT * FROM usuarios WHERE idUser=:idU;',
                        ["idU" => $id]);

            $res = $db->getRow("usuarios");
            return $res;
        }

        public function __toString() {

            return print_r($this, true) ;
        }


        // public function inicioSesion() {

        // }

        public function logout() {
            session_start();

            $_SESSION=[];

            session_destroy();
        }

    }