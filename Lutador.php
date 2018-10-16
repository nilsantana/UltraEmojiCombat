<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lutador
 *
 * @author Nil
 */
class Lutador {
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;




    //Métodos
    function apresentar(){
        echo "<p>---------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador " . $this->getNome();
        echo " veio diretamente de " .$this->getNacionalidade();
        echo " tem ".$this->getIdade() . " anos e pesa " . $this->getPeso() . " Kg</p>";
        echo "<br>Ele tem ".$this->getVitorias()." vitórias ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates(). " empates!";
    }
    function status(){
        echo "<p>---------------------------</p>";
        echo "<p>".$this->getNome(). " é um peso ".$this->getCategoria();
        echo " e já ganhou ".$this->getVitorias()." vezes, ";
        echo "perdeu ".$this->getDerrotas()." vezes";
        echo " e empatou ".$this->getEmpates()." vezes!</p>";
    }
    function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
        
    }
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
        
    }
    function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);       
    }

    //Métodos Especiais
    //método construtor
    function Lutador($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    //getters & setters
    public function getNome() {
        return $this->nome;
    }
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function getPeso() {
        return $this->peso;
    }
    public function getVitorias() {
        return $this->vitorias;
    }
    public function getDerrotas() {
        return $this->derrotas;
    }
    public function getEmpates() {
        return $this->empates;
    }
    public function setNome($no) {
        $this->nome = $no;
    }
    public function setNacionalidade($na) {
        $this->nacionalidade = $na;
    }
    public function setIdade($id) {
        $this->idade = $id;
    }
    public function setAltura($al) {
        $this->altura = $al;
    }
    public function setPeso($pe) {
        $this->peso = $pe;
        $this->setCategoria();
    }
    public function setVitorias($vi) {
        $this->vitorias = $vi;
    }
    public function setDerrotas($de) {
        $this->derrotas = $de;
    }
    public function setEmpates($em) {
        $this->empates = $em;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function setCategoria() {
        if ($this->peso<52.2){
            $this->categoria = "Inválido: Abaixo do peso mínimo";
       }elseif ($this->peso <= 70.3) {
           $this->categoria ="Leve";
        }elseif ($this->peso <=83.9) {
            $this->categoria = "Médio";
        }elseif ($this->peso<=120.2) {
            $this->categoria ="Pesado";
        } else {
            $this->categoria ="Inválido: Acima do peso máximo";
        }
    } 
}
