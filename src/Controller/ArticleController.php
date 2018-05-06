<?php
/**
 * Created by PhpStorm.
 * User: Mateusz
 * Date: 06.05.2018
 * Time: 13:00
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'content of this page is: %s',
            $slug
        ));
    }
}