<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
class LuckyControllerJson
{

    /**
     * @Route("/articles")
     */
    public function articles(): Response
    {
        $fetcher = new \App\Classes\Fetcher();
        $articles = $fetcher->fetchNews();

        return new JsonResponse($articles);
    }
}
