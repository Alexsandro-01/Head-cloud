<?php
    Class Nota {
        private $matricula;
        private $curso;
        private $nota;


        public function __get($atrib) {
            return $this->$atrib;
        }

        public function __set($atrib, $value) {
            $this->$atrib = $value;
        }
    }
?>