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

    }