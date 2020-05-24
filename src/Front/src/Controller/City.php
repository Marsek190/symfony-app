<?php
declare(strict_types=1);

namespace Front\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class City extends AbstractController
{
    protected \Front\Service\City $city;

    public function __construct(\Front\Service\City $city)
    {
        $this->city = $city;
    }

    public function __invoke(Request $request): Response
    {
        $city = $this->city->getById(1);
        var_dump($city); die();

        return $this->render('home/index.html.twig', [
            'controller_name' => static::class,
        ]);
    }
}