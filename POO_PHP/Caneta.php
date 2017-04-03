<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caneta
 *
 * @author correa
 */
class Caneta {
    
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    public function rabiscar(){
        
        if ($this->tampada){
            echo "Erro";
        }else {
            echo "Rabiscando";
        }
        
    }
    public function tampar(){
        
        $this->tampada = TRUE;
    }
    public function destampar(){
        
        $this->tampada = FALSE;
        
    }
    
    
    
}
