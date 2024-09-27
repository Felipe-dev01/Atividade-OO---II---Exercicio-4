<?php

// Definição da classe
class Vinho {
    // Definição os atributos
    private $nome;
    private $tipo;
    private $preco;
    private $safra;

    // Definição do construtor
    public function __construct($nome, $tipo, $preco, $safra) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->preco = $preco;
        $this->safra = $safra;
    }

    // Definição dos SETs
    public function setNome($nome){
        $this -> nome = $nome;
    }

    public function setTipo($tipo){
        $this -> tipo = $tipo;
    }
     
    public function setpreco($preco){
        $this -> preco = $preco;
    }

    public function setSafra($safra){
        $this -> safra = $safra;
    }

    // Definição dos GETs
    public function getNome(){
        return $this -> nome;
    }

    public function getTipo(){
        return $this -> tipo;
    }
     
    public function getpreco(){
        return $this -> preco;
    }

    public function getSafra(){
        return $this -> safra;
    }

    // Definição dos métodos
    public function mostrarVinho(){
        return "Nome: {$this -> nome}, Tipo: {$this -> tipo}, Preço: {$this -> preco}, Safra: {$this -> safra}";
    }

    public function verificaPreco($preco){
        if ($preco < 25) {
            $resultado = true;
        } else {
            $resultado = false;
        }
        
        return $resultado;
    }

}