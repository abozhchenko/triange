<?php

namespace TriBundle\Controller;


use TriBundle\Entity\Post;
use TriBundle\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class BlogController extends Controller
{
    /**
     * @Route ("/blog", name="blog")
     */
    public function indexAction()
    {
        return $this->render('TriBundle:Blog:blog.html.twig');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/list", name="post_list")
     */
    public function listAction(Request $request)
    {
        $postRepository = $this->get('doctrine')->getRepository('AppBundle:Post');

        $posts = $postRepository->findAll();
        return $this->render('TriBundle:Blog:listblog.html.twig', array(
            'posts' => $posts
        ));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/blog/add", name = "add_post")
     */
    public function addAction(Request $request)
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        return $this->render('TriBundle:Blog:addblog.html.twig', array(
            'add_post' => $form->createView()
        ));
    }





}
