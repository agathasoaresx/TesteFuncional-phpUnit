<?php

use PHPUnit\Framework\TestCase;
use ENGA5\ListaNumerica;

class ListaNumericaTest extends TestCase{

   /**
    * @dataProvider casosDeTestesProvider
    */

    public function testQuantidadeDeValores($vet, $expected){
        $ln = new ListaNumerica;
        $ln->setValores($vet);

        $this->assertEquals($expected, $ln->verificaQuantidade());
    }

    /**
    * @dataProvider casosDeTestes2
    */

    public function testValores($vet, $expected){
        $ln = new ListaNumerica;
        $ln->setValores($vet);

        $this->assertEquals($expected, $ln->verificaValores());
    }

    public function casosDeTestesProvider(): array
    {
        return [
            'Quantidade vazia'                  => [[], 'Invalido'],
            'Quantidade menor que 4'            => [[56208,27270,65319], 'Invalido'],
            'Quantidade e intervalo valido'     => [[56208,27270,65319, 8888], 'Valido']
        ];
    }

    public function casosDeTestes2(): array
    {
        return [
            'Quantidade vazia'                  => [[], 'Invalido'],
            'Valor menor que 10000'            => [[55555,66666,77777], 'Valido'],
            'Uma letra'                         => [['a5555','a5555','a5555', 'a5555'], 'Invalido']
        ];
    }
   

};

