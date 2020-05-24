<?php
declare(strict_types=1);

namespace Front\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Home extends AbstractController
{
    public function __construct()
    {

    }

    public function __invoke(Request $request): Response
    {
        var_dump($request);

        return $this->render('home/index.html.twig', [
            'controller_name' => static::class,
        ]);
    }
}