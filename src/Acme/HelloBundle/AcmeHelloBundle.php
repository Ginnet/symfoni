<?php

namespace Acme\HelloBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeHelloBundle extends Bundle
{
	public function indexAction($name)
    {
        return $this->render('AcmeHelloBundle:Hello:index.html.twig', array('name' => $name));
    }
}
