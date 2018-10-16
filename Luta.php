<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Luta
 *
 * @author Nil
 */
require_once 'Lutador.php';
class Luta {
//Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;    
//Métodos Públicos    
    public function marcarLuta($l1, $l2){
        if ($l1->getCategoria()=== $l2->getCategoria() && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
        
    }
    public function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor){
            case 0://empate
                echo "<p>Empate!</p>";
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
                break;
            case 1://ganha desafiado
                echo "<p>Vitória do desafiado ".$this->desafiado->getNome()."!</p>";
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
                break;
            case 2:// ganha desafiante 
                echo "<p>Vitória do desafiante ".$this->desafiante->getNome()."!</p>";
                $this->desafiado->perderLuta();
                $this->desafiante->ganharLuta();
                break;
             }  
        }else{
            echo "<p>Luta não aprovada</p>";
        }
    }
    // Métodos especiais
    //construtor
   

    
    //getters & setters
    
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }


}
