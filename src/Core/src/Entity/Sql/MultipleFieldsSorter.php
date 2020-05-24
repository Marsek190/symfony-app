<?php
declare(strict_types=1);

namespace Core\Entity\Sql;


use Core\BaseInterface\ISorter;
use Core\Collection\MultipleFieldsSorterCollection;

final class MultipleFieldsSorter implements ISorter
{
    private MultipleFieldsSorterCollection $sorterCollection;

    public function __construct(MultipleFieldsSorterCollection $sorterCollection)
    {
        $this->sorterCollection = $sorterCollection;
    }

    public function toString(): string
    {
        return $this->sorterCollection->toString();
    }
}