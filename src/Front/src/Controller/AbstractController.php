<?php
declare(strict_types=1);

namespace Front\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    /**
     * @param Request $request
     * @return Response
     */
    public abstract function __invoke(Request $request): Response;
}