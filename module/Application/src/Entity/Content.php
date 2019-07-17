<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Entity;

/**
 * Description of Content
 *
 * @author alexander
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="content")
 */

class Content {
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")   
     */
    protected $id;
    
    /** 
     * @ORM\Column(name="appContent")  
     */
    protected $appContent;
    
    /** 
     * @ORM\Column(name="appContentDescription")  
     */
    protected $appContentDescription;
    
    public function getContent() {

        return ([
            'appContent' => $this->appContent,
            'appContentDescription' => $this->appContentDescription]);
        
    }

}
