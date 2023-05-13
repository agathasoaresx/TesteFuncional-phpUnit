<?php

use PHPUnit\Framework\TestCase;
use ENGA5\ListaNumerica;

class ListaNumericaTest extends TestCase{

    public function testQuantidadeDeValoresVazios(){
        $ln = new ListaNumerica;
        $ln->setValores([]);

        $this->assertEquals('Invalido', $ln->verificaQuantidade());

    }

    public function testUmValorMenorDoQue10000(){
        $ln = new ListaNumerica();
        $ln->setValores([9999, 55555, 55555, 55555, 55555, 55555]);

        $this->assertEquals('Invalido', $ln->verificaValores());
    }

    // Crie um teste para quantidade e intervalo de valores válidos

    public function testQuantidadeDeValoresValidos(){
        $ln = new ListaNumerica;
        $ln->setValores([56208, 27270, 65319, 10294]);

        $this->assertEquals('Valido', $ln->verificaQuantidade());

    }

    public function testIntervaloDeValoresValidos(){
        $ln = new ListaNumerica();
        $ln->setValores([56208, 27270, 65319, 18902]);

        $this->assertEquals('Valido', $ln->verificaValores());
    }

    // Crie mais 3 testes para quantidades

    public function testQuantidadeDeValoresMenorQue4(){
        $ln = new ListaNumerica;
        $ln->setValores([56208, 27270, 65319]);

        $this->assertEquals('Invalido', $ln->verificaQuantidade());

    }

    public function testQuantidadeDeValoresMaiorQue10(){
        $ln = new ListaNumerica;
        $ln->setValores([56208, 27270, 65319, 10294, 14531, 15968, 70787, 32033, 42199, 57235, 98958]);

        $this->assertEquals('Invalido', $ln->verificaQuantidade());

    }

    public function testQuantidadeDeValoresEntreQuatroEDez(){
        $ln = new ListaNumerica;
        $ln->setValores([56208, 27270, 65319, 67453, 32463]);

        $this->assertEquals('Valido', $ln->verificaQuantidade());

    }

    // Crie mais 3 testes para intervalos

    public function testUmValorMaiorDoQue99999(){
        $ln = new ListaNumerica();
        $ln->setValores([56208, 27270, 65319, 18902, 9887878]);

        $this->assertEquals('Invalido', $ln->verificaValores());
    }

    public function testValoresEntre10000E99999(){
        $ln = new ListaNumerica();
        $ln->setValores([56208, 27270, 65319, 18902, 13456]);

        $this->assertEquals('Valido', $ln->verificaValores());
    }

    


    


};

