<?php
    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){
            
            if($valor > $this->Saldo){
                $resultado = "Saldo Insfuficiente <br>";
                return $resultado;

            }else{
                $this->Saldo =  $this->Saldo + $valor;
                $resultado = "Saldo atualizado para R$ ".  $this->Saldo;
                return $resultado;

            }
            
            $this->Saldo =  $this->Saldo - $valor;
            
            return $this->Saldo;
        }
        public function Depositar($valor){
            $this->Saldo =  $this->Saldo + $valor;
            $resultado = "Saldo atualizado para : R$";
            return $resultado;
        }
        public function ConsultarSaldo(){
            echo "Nome: ". $this->Nome . "<br>";
            echo "Cpf: ". $this->Cpf . "<br>";
            echo "Seu saldo  é : ". $this->Saldo . "<br>";
        }
    }

?>