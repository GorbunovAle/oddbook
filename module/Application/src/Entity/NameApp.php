<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Entity;

/**
 * Description of Name
 *
 * @author alexander
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="nameapp")
 */

class NameApp {
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")   
     */
    protected $id;
        
    /** 
     * @ORM\Column(name="appName")  
     */
    protected $appName;
    
    /** 
     * @ORM\Column(name="appDescription")  
     */
    protected $appDescription;
    
    public function getNameApp() {

        return ([
            'appName' => $this->appName,
            'appDescription' => $this->appDescription]);
    
        
    }

}