<?php
use PHPUnit\Framework\TestCase;

class ArrayDiffTest extends TestCase
{ 
    public function soma($na, $nb){
        $a = $na ;
        $b = $nb;
        return $a+$b ;
    }

    public function vetorA(){
        $a = $this->soma(1,1);
        $b = $this->soma(1,2);
        $c = $this->soma(1,3);
        $d = $this->soma(1,4);
        return [$a, $b, $c, $d];
    }

    public function vetorB(){
        $a = $this->soma(1,1);
        $b = $this->soma(1,2);
        $c = $this->soma(1,3);
        $d = $this->soma(1,4);
        return [$a, $b, $c, $d];
    }

    public function testEquality() {   
        $a = $this->vetorA();
        $b = $this->vetorB();
        $this->assertEquals(
            $a, $b
        );
    }

    public function testSoma(){
        $a = $this->soma(1,1) ;
        $b = 2 ;
        $this->assertEquals(
            $a, $b
        );
    }
}
?>