<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class TesteController extends AppController
    {
        public function soma($n1, $n2){
            $this->set('n1', $n1);
            $this->set('n2', $n2);
            return $n1 + $n2 ;
        }

        public function index(){
           $resultado = $this->soma(1,1);
           $esperado = 2 ;
           $this->set('resultado', $resultado);
           $this->set('esperado', $esperado);

           $resultado2 = $this->soma(1,4);
           $esperado2 = 5 ;
           $this->set('esperado2' , $esperado2);
           $this->set('resultado2', $resultado2);
        }


    }
