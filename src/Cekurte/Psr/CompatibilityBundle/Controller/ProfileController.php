<?php

namespace Cekurte\Psr\CompatibilityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ProfileController extends Controller
{
    /**
     * @Route("/profile", name="profile")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/public/{profile}", name="public_profile")
     * @Method("GET")
     * @Template()
     */
    public function publicProfileAction($profile)
    {
        var_dump($profile);exit;
        return array();
    }
}
