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
   private $modelo;
   private $ponta;
   
   function getModelo() {
       return $this->modelo;
   }

   function getPonta() {
       return $this->ponta;
   }

   function setModelo($modelo) {
       $this->modelo = $modelo;
   }

   function setPonta($ponta) {
       $this->ponta = $ponta;
   }


}
