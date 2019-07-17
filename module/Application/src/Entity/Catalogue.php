<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Entity;

/**
 * Description of Catalogue
 *
 * @author alexander
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="catalogue")
 */

class Catalogue {
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")   
     */
    protected $id;
    
    /** 
     * @ORM\Column(name="appCatalogue")  
     */
    protected $appCatalogue;
    
    /** 
     * @ORM\Column(name="appCatalogueDescription")  
     */
    protected $appCatalogueDescription;
    
    public function getCatalogue() {

        return ([
            'appCatalogue' => $this->appCatalogue,
            'appCatalogueDescription' => $this->appCatalogueDescription]);
        
    }

    
}
