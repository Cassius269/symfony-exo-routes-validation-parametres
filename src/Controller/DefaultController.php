<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route(
        path: '/blog/{title}',
        name: 'blog',
        requirements: ['title' => '[\p{L}-]+'],
        methods: ["GET"]
    )]
    public function index(string $title): Response
    {
        $newTitle = str_replace('-', ' ', $title);
        //dd($newTitle);
        return new Response('<h1>Titre : ' . $newTitle . '</h1>');
    }
}
