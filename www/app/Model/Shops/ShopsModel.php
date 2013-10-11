<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShopsModel
 *
 * @author AdmiN
 */
class ShopsModel extends AppModel{
    public $table = "shops";
    public $useTable = "shops";
    
    public function getAllShops(){
//        $this->
//        $query = ;
//        $res = $this->query("SELECT 2+1;");
        return "a";
    }
    public function query($sql) {
        parent::query($sql);
    }
//    public function getAllShops1(){
//        $this->buildQuery("all", $query);
//    }
}


