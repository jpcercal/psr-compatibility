<?php

namespace Cekurte\Psr\CompatibilityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class AppController extends Controller
{
    /**
     * @Route("/", name="app")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
