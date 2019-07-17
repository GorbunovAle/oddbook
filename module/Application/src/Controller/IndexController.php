<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Entity\NameApp;
use Application\Entity\Catalogue;
use Application\Entity\Content;
use Application\Entity\Basket;

class IndexController extends AbstractActionController
{
    
 /**
     * Менеджер сущностей.
     * @var Doctrine\ORM\EntityManager
     */
    private $entityManager;
  
    // Метод конструктора, используемый для внедрения зависимостей 
    // в контроллер.
    public function __construct($entityManager) 
    {
        $this->entityManager = $entityManager;
    }
  
    // Действие по умолчанию "index". Оно отображает страницу 
    // HomePage.
    public function indexAction() 
    {
        // Получаем сущности.
        $appPage = $this->entityManager
                     ->getRepository(NameApp::class)
                     ->find(1);
        
        $Catalogue = $this->entityManager
                     ->getRepository(Catalogue::class)
                     ->find(1);
        
        $Content = $this->entityManager
                     ->getRepository(Content::class)
                     ->find(1);
        
        $Basket = $this->entityManager
                     ->getRepository(Basket::class)
                     ->find(1);
        
        // Инициализируем отдельные представления
        $PageView = new ViewModel($appPage->getNameApp());
        $PageView->setTemplate('application/index/appPage');
        
        $CatalogueView = new ViewModel($Catalogue->getCatalogue());
        $CatalogueView->setTemplate('application/index/catalogue');
        
        $ContentView = new ViewModel($Content->getContent());
        $ContentView->setTemplate('application/index/content');
        
        $BasketView = new ViewModel($Basket->getBasket());
        $BasketView->setTemplate('application/index/basket');
                        
        // Визуализируем шаблон представления.
        
        $PageView->addChild($CatalogueView, 'catalogue')
                ->addChild($ContentView, 'content')
                ->addChild($BasketView, 'basket');
        
        return $PageView;
    }
}
