<?php

class Carro
{
    private string $fabricante;
    private string $modelo;
    private float $preco;

    public function __construct(string $fabricante, string $modelo, float $preco)
    {
        $this->fabricante = $fabricante;
        $this->modelo = $modelo;
        $this->preco = $preco;
    }

    public function classificarCarro(): string
    {
        if ($this->preco <= 100000) {
            return 'carro popular';
        }

        if ($this->preco <= 300000) {
            return 'performance intermediária';
        }

        return 'carros de alta performance';
    }

    public function exibirInformacoesPopular(): string
    {
        if ($this->classificarCarro() !== 'carro popular') {
            return '<p><strong>Mensagem:</strong> Este carro não se encaixa na categoria popular.</p>';
        }

        return '<p><strong>Fabricante:</strong> ' . htmlspecialchars($this->fabricante, ENT_QUOTES, 'UTF-8') . '</p>'
            . '<p><strong>Modelo:</strong> ' . htmlspecialchars($this->modelo, ENT_QUOTES, 'UTF-8') . '</p>'
            . '<p><strong>Preço de venda:</strong> R$ ' . number_format($this->preco, 2, ',', '.') . '</p>';
    }
}

?>
