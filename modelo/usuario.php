<?php

    require_once "Database.php";

    class usuarios {
        private $idUser;
        private $nombre;
        private $apellidos;
        private $dni;
        private $nacimiento;
    
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
            $db = Database::getInstance();
            $db->query('INSERT INTO usuarios(nombre, apellidos, dni, nacimiento) VALUES (:nom, :apl, :iden, :ncm);',
                        [":nom" =>$this->nombre,
                         ":apl" =>$this->apellidos,
                         ":iden" =>$this->dni,
                         ":ncm" =>$this->nacimiento]);
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
            $db->query('UPDATE usuarios SET nombre , apellidos , dni , nacimiento VALUES :nombre, :apl, :iden, :ncm WHERE idUser=:idU',
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

        public static function getBoard($id) {
            $db = Database::getInstance();
            $db->query('SELECT * FROM usuarios WHERE idUser=:idU;',
                        ["idU" => $id]);

                        $db->getRow("usuarios");
        }
    }