<?php
    class Produto{
        private $Nome;
        private $Preco;
        private $Quantidade;

        public function __construct($nome,$preco,$quantidade = 0){
            $this->Nome = $nome;
            $this->Preco = $preco;
            $this->Quantidade = $quantidade;
        }

        public function getNome(){
            return $this->Nome;
        }
        public function setNome($nome){
            $this->Nome = $nome;
        }

        public function getPreco(){
            return $this->Preco;
        }
        public function setPreco($preco){
            $this->Preco = $preco;
        }

        public function adicionarEstoque($qtd){
            $this->Quantidade += $qtd;
        }
        public function removerEstoque($qtd){
            $this->Quantidade -= $qtd;
        }
        
        public function mostrarDetalhes(){
            echo "Produto: " . $this->Nome . "<br>"; 
            echo "Preço: " . $this->Preco . "<br>";
            echo "Quantidade em estoque:" . $this->Quantidade. "<br>";
        }
    }


?>