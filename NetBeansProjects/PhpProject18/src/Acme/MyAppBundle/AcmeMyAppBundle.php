<?php

namespace Acme\MyAppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Acme\MyAppBundle\DependencyInjection\compiler ; 

class AcmeMyAppBundle extends Bundle
{
    
    public function build(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        parent::build($container);        
        $container->addCompilerPass(new compiler\ContainerAwarePass() );
    }
    
}
