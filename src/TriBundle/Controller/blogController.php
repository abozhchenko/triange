<?php

namespace TriBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlogController extends Controller
{
    /**
     * @Route ("/blog", name="blog")
     */
    public function indexAction()
    {
        return $this->render('TriBundle:Blog:blog.html.twig');
    }

}
