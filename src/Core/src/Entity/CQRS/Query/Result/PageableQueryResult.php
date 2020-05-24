<?php
declare(strict_types=1);

namespace Core\Entity\CQRS\Query\Result;


use Core\Entity\CQRS\BaseInterface\IPageableQueryResult;
use Doctrine\ORM\Tools\Pagination\Paginator;

final class PageableQueryResult implements IPageableQueryResult
{
    private Paginator $paginator;

    public function __construct(Paginator $paginator)
    {
        $this->paginator = $paginator;
    }

    public function getResult(): Paginator
    {
        return $this->paginator;
    }
}