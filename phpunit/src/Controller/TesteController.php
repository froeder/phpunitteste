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

           $this->set('resultado', $resultado);
        }


    }
