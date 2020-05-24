<?php
declare(strict_types=1);

namespace Front\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Country extends AbstractController
{
    protected \Front\Service\Country $country;

    public function __construct(\Front\Service\Country $country)
    {
        $this->country = $country;
    }

    public function __invoke(Request $request): Response
    {
        $country = $this->country->getById(1);
        var_dump($country);

        return $this->render('home/index.html.twig', [
            'controller_name' => static::class,
        ]);
    }
}