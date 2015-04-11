<?php

namespace Cekurte\Psr\CompatibilityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ApiController extends Controller
{
    /**
     * @Route("/", name="api")
     * @Method("POST")
     * @Template()
     */
    public function apiAction()
    {
        return array();
    }
}
