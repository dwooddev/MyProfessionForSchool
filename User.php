<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User{
    public $firstname = '';
    public $lastname = '';
    public $username = '';
    public $password = '';
    
    public function validate() {
        if($this->firstname === null || $this-> firstname === '' ){
            return(false);
        }
        if($this->lastname === null || $this-> lastname === ''){
            return(false);
        }
        if($this->username === null || $this-> username === ''){
            return(false);
        }
        if($this->password === null || $this->password === ''){
            return(false);
        }
        return true;
    }
}