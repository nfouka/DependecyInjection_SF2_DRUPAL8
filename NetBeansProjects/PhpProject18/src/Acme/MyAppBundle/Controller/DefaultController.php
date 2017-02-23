<?php

namespace Acme\MyAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
    protected $entityManager  ; 

    public function __construct(\Doctrine\ORM\EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    public function indexAction()
    {
        return $this->render('AcmeMyAppBundle:Default:index.html.twig');
    }
}
