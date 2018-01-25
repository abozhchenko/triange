<?php

namespace TriBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SocialController extends Controller
{
    /**
     * @Route ("/facebook")
     */
    public function redirectFacebook()
    {
        return $this->redirect("https://facebook.com");
    }


    /**
     * @Route ("/twitter")
     */
    public function redirectTwitter()
    {
        return $this->redirect("https://twitter.com");
    }



}
