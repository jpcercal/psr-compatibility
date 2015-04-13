<?php

namespace Cekurte\Psr\CompatibilityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ApiController extends Controller
{
    /**
     * @Route("/", name="api")
     * @Method("POST")
     */
    public function apiAction()
    {
        return array();
    }
}
