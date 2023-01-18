<?php

use PHPUnit\Framework\TestCase;
use Joaocaraujo\DigitalCep\Search; 

class SearchTest extends TestCase {

    /**
    * @dataProvider dadosTeste
    */
    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado) {
        $result = new Search();
        $result = $result->getAddressFromZipcode($input);
        
        $this->assertEquals($esperado, $result);
    }

    public function dadosTeste() {
        return [
            "Endereço Praça Sete de Setembro" => [
                "30130010",
                    [
                        "cep" => "30130-010",
                        "logradouro" => "Praça Sete de Setembro",
                        "complemento" => "",
                        "bairro" => "Centro",
                        "localidade" => "Belo Horizonte",
                        "uf" => "MG",
                        "ibge" => "3106200",
                        "gia" => "",
                        "ddd" => "31",
                        "siafi" => "4123"
                    ]
                ],
                "Endereço Dois" => [
                    "33200614",
                    [
                        "cep" => "33200-614",
                        "logradouro" => "Rua Piauí",
                        "complemento" => "",
                        "bairro" => "Célvia",
                        "localidade" => "Vespasiano",
                        "uf" => "MG",
                        "ibge" => "3171204",
                        "gia" => "",
                        "ddd" => "31",
                        "siafi" => "5425"
                    ]
                ]
        ];
    }

}