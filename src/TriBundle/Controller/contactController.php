<?php

namespace TriBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class contactController extends Controller
{
    /**
     * @Route ("/contact", name="contact")
     */
    public function indexAction()
    {
        return $this->render('TriBundle:Contact:contact.html.twig');
    }
}
