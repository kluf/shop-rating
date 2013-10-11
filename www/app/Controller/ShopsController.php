<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShopsController
 *
 * @author AdmiN
 */
class ShopsController extends AppController{
    public function index(){
        $this->loadModel("Shops");
//        $data['shopses']['shop'] = $this->Shops->query("SELECT * from shops;");
        $data['shops'] = array('name' => '2','surname' => '3');
        $this->set($data);
        $this->render("index", "template");
    }
}


