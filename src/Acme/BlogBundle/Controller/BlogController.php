<?php
namespace Acme\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
class BlogController extends Controller
{
    public function showAction($slug)
    {
        $blog = // usa la variable $slug para consultar la base de datos
 
        return $this->render('AcmeBlogBundle:Blog:show.html.twig', array(
            'blog' => $blog,
        ));
    }
}