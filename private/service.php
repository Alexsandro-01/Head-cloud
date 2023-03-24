<?php

    Class Service {
        private $conexao;
        private $nota;
        private $sessao;

        public function __construct($conexao, $nota) {
            $this->conexao = $conexao->conectar();
            $this->nota = $nota;

        }

        public function inserir() {

            $nota = $this->nota->__get('nota');
            $curso = $this->nota->__get('curso');
            $matricula = $this->nota->__get('matricula');

            switch ($curso) {
                case 'html':
                    $query = 'update tb_notas set html = :nota where matricula = :matricula';
                    break;
                    
                case 'css':
                    $query = 'update tb_notas set css = :nota where matricula = :matricula';
                    break;

                case 'javascript':
                    $query = 'update tb_notas set javascript = :nota where matricula = :matricula';
                    break;

                case 'php':
                    $query = 'update tb_notas set php = :nota where matricula = :matricula';
                    break;
                }

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':matricula', $matricula);
            $stmt->bindValue(':nota', $nota);
            
                //retorna o numero de modificações;
            return $stmt->execute();
           
        }

        public function recuperar($atrib) {
            if($atrib == 'login') {

                $query = '
                    select 
                        *
                    from 
                        tb_registro 
                    where 
                        matricula = :matricula
                    and
                        nome = :nome
                    ';
                    
                    $stmt = $this->conexao->prepare($query);
                    $stmt->bindValue(':matricula', $_POST['matricula']);
                    $stmt->bindValue(':nome', $_POST['nome']);
                    $stmt->execute();
                    return $stmt->fetchall(PDO::FETCH_OBJ);
            }
            
            else if($atrib == 'notas') {

                $query = '
                select
                    *
                from
                    tb_notas
                where
                    matricula = :matricula
                ';
                    
                    $stmt = $this->conexao->prepare($query);
                    $stmt->bindValue(':matricula', $_SESSION['matricula']);
                    $stmt->execute();
                return $stmt->fetchall(PDO::FETCH_OBJ);
            }

            else if($atrib == 'alunos') {
                /*
                echo '<pre>';
                    print_r($this->usuario->__get('curso'));
                    echo '</pre>';
                    */
                    $query = '
                    SELECT
                        tb_registro.matricula, nome, turma, html, css, javascript, php
                    FROM
                        tb_notas
                    right JOIN 
                        tb_registro
                    ON
                        (tb_registro.matricula =  tb_notas.matricula)
                    WHERE
                        privilegio = :aluno
                    ';
                    
                    $stmt = $this->conexao->prepare($query);
                    $stmt->bindValue(':aluno', 'Aluno');

                    $stmt->execute();
                    return $stmt->fetchall(PDO::FETCH_OBJ);
            }

            else if($atrib == 'A') {
                $query = '
                    SELECT
                        tb_registro.matricula, nome, turma, html, css, javascript, php
                    FROM
                        tb_notas
                    right JOIN 
                        tb_registro
                    ON
                        (tb_registro.matricula =  tb_notas.matricula)
                    WHERE
                        turma = :turma
                ';

                $stmt = $this->conexao->prepare($query);
                $stmt->bindValue(':turma', $atrib);
                $stmt->execute();
                return $stmt->fetchall(PDO::FETCH_OBJ);
            }

            else if($atrib == 'B') {
                $query = '
                    SELECT
                        tb_registro.matricula, nome, turma, html, css, javascript, php
                    FROM
                        tb_notas
                    right JOIN 
                        tb_registro
                    ON
                        (tb_registro.matricula =  tb_notas.matricula)
                    WHERE
                        turma = :turma
                ';

                $stmt = $this->conexao->prepare($query);
                $stmt->bindValue(':turma', $atrib);
                $stmt->execute();
                return $stmt->fetchall(PDO::FETCH_OBJ);
            }
                    
        }
        
        public function deletar() {

        }
    }
    ?>