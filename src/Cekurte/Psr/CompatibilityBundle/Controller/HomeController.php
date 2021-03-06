<?php

namespace Cekurte\Psr\CompatibilityBundle\Controller;

use Cekurte\ComponentBundle\HttpFoundation\SerializedResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class HomeController extends Controller
{
    /**
     * @Route("/home", name="home", options={"expose"=true})
     * @Method("GET")
     */
    public function indexAction()
    {
        return new SerializedResponse(array(
            'home' => 'Home'
        ));
    }
}
