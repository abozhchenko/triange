<?php

namespace TriBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class WorkController extends Controller
{
    /**
     * @Route ("/work", name="work")
     */
    public function indexAction()
    {
        return $this->render('TriBundle:Work:work.html.twig');
    }
}
