<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    public function number($id): Response
    {
        $data = array(
            'number' => $id
        );
        // dump($data);
        return $this->render('lucky/number.html.twig', $data);
    }
    /**     
     * @Route("/hello")     
     */
    public function hello($name)
    {
        return new Response(
            "<html><body>Hello</body></html>"
        );
    }
}
