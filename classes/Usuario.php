<?php
    require ("../conexao.php")

    class Usuario {
        public $nome;
        public $sobrenome;
        public $email;
        public $senha;

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getSobrenome(){
            return $this->sobrenome;
        }
        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
    }
?>