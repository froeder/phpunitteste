<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TesteController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TesteController Test Case
 */
class TesteControllerTest extends IntegrationTestCase
{
    /**
     * Test index method
     *
     * @return void
     */
    public function testSoma()
    {
        $classe = new TesteController();
        $resultado = $classe->soma(1,1);
        $this->assertEquals($resultado, 2 );
    }

    public function testDivisao()
    {
        $classe = new TesteController();
        $resultado = $classe->divisao(10,2);
        $this->assertEquals($resultado, 5 );
    }

    public function testSubtracao()
    {
        $classe = new TesteController();
        $resultado = $classe->subtracao(1,1);
        $this->assertEquals($resultado, 0 );
    }

    public function testMultiplicacao()
    {
        $classe = new TesteController();
        $resultado = $classe->multiplicacao(1,1);
        $this->assertEquals($resultado, 1 );
    }
}
