<?php

    require_once "Database.php";

    class historial {
        private $nhc;
        private $evolucion;
        private $idUser;
        private $observaciones;
    
        public function setnhc($nhc) {
            $this->nhc= $nhc;
        }

        public function setevolucion($evl) {
            $this->evolucion= $evl;
        }

        public function setidUser($idU) {
            $this->idUser= $idU;
        }

        public function setobservaciones($obv) {
            $this->observaciones= $obv;
        }

        public function getnhc() {
            return $this->nhc;
        }

        public function getevolucion() {
            return $this->evolucion;
        }

        public function getidUser() {
            return $this->idUser;
        }

        public function getobservaciones() {
            return $this->observaciones;
        }
        
        public function __construct(){

        }

        public function editarHistoria() {
            $db = Database::getInstance();
            $db->query('UPDATE historial SET nhc=:nhc , evolucion=:evl, idUser=:idU, observaciones=:obv WHERE idUser=:idU',
                        [":nhc" => $this->nhc,
                        ":evl" => $this->evolucion,
                        ":idU" => $this->idUser,
                        ":obv" => $this->observaciones]);
        }

        public static function obtenerHistoria($id) {
            $db = Database::getInstance();
            $db->query('SELECT * FROM historial WHERE idUser=:idU;',
                        ["idU" => $id]);

            $res = $db->getRow("historia");
            return $res;
        }

        // public function historico() {
        //     $db = Database::getInstance();
        //     $db->query('SELECT * FROM historial_clinico;');
        //     $datos=[];
        //     while($item = $db->getRow('historial')):
        //         array_push($datos,$item);
        //     endwhile;
        //     return $datos;
            
        // public function historico() {
        //     $db = Database::getInstance();
        //     $db->query('SELECT * FROM historial_clinico;');
        //     $datos=[];
        //     while($item = $db->getRow('historial')):
        //         array_push($datos,$item);
        //     endwhile;
        //     return $datos;
            
        // public function update() {
        //     $db = Database::getInstance();
        //     $db->query('UPDATE usuarios SET nombre=:nom , apellidos=:apl, dni=:iden, nacimiento=:ncm WHERE idUser=:idU',
        //                 [":idU" => $this->idUser,
        //                 ":nom" => $this->nombre,
        //                 ":apl" => $this->apellidos,
        //                 ":iden" => $this->dni,
        //                 ":ncm" => $this->nacimiento]);
        // }

        // public function agregar() {
        //     $db = Database::getInstance();
        //     $db->query('INSERT INTO usuarios(nombre, apellidos, dni, nacimiento) VALUES (:nom, :apl, :iden, :ncm);',
        //                 [":nom" =>$this->nombre,
        //                  ":apl" =>$this->apellidos,
        //                  ":iden" =>$this->dni,
        //                  ":ncm" =>$this->nacimiento]);
        //             $this-> idUser - $db->getLastId();   
        // }

        // public function delete() {
        //     $db = Database::getInstance();
        //     $db->query('DELETE FROM usuarios WHERE idUser= :idU',
        //                 [":idU" =>$this->idUser]);
        // }

        // public function deleteUsuarios($id) {
        //     $db = Database::getInstance();
        //     $db->query('DELETE FROM usuarios WHERE idUser = :idU',
        //                 [":idU" => $id]);
        // }

        // // public function update() {
        // //     $db = Database::getInstance();
        // //     $db->query('UPDATE usuarios SET nombre=:nom , apellidos=:apl, dni=:iden, nacimiento=:ncm WHERE idUser=:idU',
        // //                 [":idU" => $this->idUser,
        // //                 ":nom" => $this->nombre,
        // //                 ":apl" => $this->apellidos,
        // //                 ":iden" => $this->dni,
        // //                 ":ncm" => $this->nacimiento]);
        // // }

        // public function listadovariado() {
        //     $db = Database::getInstance();
        //     $db->query('SELECT usuarios.nombre, historial_clinico.nhc, historial_clinico.evolucion, historial_clinico.observaciones FROM usuarios INNER JOIN historial_clinico ON historial_clinico.idUser=usuarios.idUser where usuarios.idUser=historial_clinico.idUser ;');
        //     $datos=[];
        //     while($item = $db->getRow('historial_clinico')):
        //         array_push($datos,$item);
        //     endwhile;
        //     return $datos;
        // }

        // public static function obtenerUsuario($id) {
        //     $db = Database::getInstance();
        //     $db->query('SELECT * FROM usuarios WHERE idUser=1;',
        //                 ["idU" => $id]);

        //     $res = $db->getRow("usuarios");
        //     return $res;
        // }

        // public function __toString() {

        //     return print_r($this, true) ;
        // }


        // // public function inicioSesion() {

        // // }

        // public function logout() {
        //     session_start();

        //     $_SESSION=[];

        //     session_destroy();

        //     // header("location:../vista/usuario.index.php");
        // }

    }