<?php

class Carro
{
    private $fabricante;
    private $modelo;
    private $preco;

    public function __construct($fabricante, $modelo, $preco)
    {
        $this->fabricante = $fabricante;
        $this->modelo = $modelo;
        $this->preco = $preco;
    }

    public function classificarCarro()
    {
        if ($this->preco <= 100000) {
            return 'carro popular';
        }

        if ($this->preco <= 300000) {
            return 'performance intermediária';
        }

        return 'carros de alta performance';
    }

    public function exibirInformacoesPopular()
    {
        if ($this->classificarCarro() !== 'carro popular') {
            return '<p><strong>Mensagem:</strong> Este carro não se encaixa na categoria popular.</p>';
        }

        return '<p><strong>Fabricante:</strong> ' . $this->fabricante . '</p>'
            . '<p><strong>Modelo:</strong> ' . $this->modelo . '</p>'
            . '<p><strong>Preço de venda:</strong> R$ ' . number_format($this->preco, 2, ',', '.') . '</p>';
    }
}
