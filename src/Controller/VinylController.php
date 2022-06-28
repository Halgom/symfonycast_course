<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response("Title: PB and Jams");
    }

    #[Route('/browse/{genre}')]
    public function browse(string $genre = null): Response
    {
        if ($genre) {
            $title = 'Genre: ' . u(str_replace('-', ' ', $slug))->title(true);
        }
        else {
            $title = 'All Genres';
        }
        return new Response($title);
    }
}