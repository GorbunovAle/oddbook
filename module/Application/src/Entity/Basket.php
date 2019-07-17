<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Entity;

/**
 * Description of Basket
 *
 * @author alexander
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="basket")
 */

class Basket {
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")   
     */
    protected $id;
       
    /** 
     * @ORM\Column(name="appBasket")  
     */
    protected $appBasket;
    
    /** 
     * @ORM\Column(name="appBasketDescription")  
     */
    protected $appBasketDescription;
        
    public function getBasket() {

        return ([
            'appBasket' => $this->appBasket,
            'appBasketDescription' => $this->appBasketDescription]);
        
    }

}
