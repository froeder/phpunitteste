<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class TesteController extends AppController
    {
        public function soma($n1, $n2){
            $resultadoSoma = $n1 + $n2 ;
            return $resultadoSoma ;
        }

        public function divisao($n1, $n2){
            $resultadoDivisao = $n1 / $n2 ;
            return $resultadoDivisao ;
        }

        public function multiplicacao($n1, $n2){
            $resultadoMultiplicacao = $n1 * $n2 ;
            return $resultadoMultiplicacao ;
        }

        public function subtracao($n1, $n2){
            $resultadoSubtracao = $n1 - $n2 ;
            return $resultadoSubtracao ;
        }

        public function index(){
           $resultado = $this->soma(1,1);
           $esperado = 2 ;
           $this->set('resultado', $resultado);
           $this->set('esperado', $esperado);
        }
    }
