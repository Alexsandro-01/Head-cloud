<?php

    Class Conexao {
        private $host = 'localhost:3306';
        private $dbname = 'head_cloud';
        private $user = 'root';
        private $pass = 'root';

        public function conectar() {
            try {
                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"
                );

                $conexao->exec('set charset utf8');

                return $conexao;
                
            } catch (PDOExcepition $e) {
                echo `<p> $e->getMessage() </p>`;
            } 
        }
    }
?>