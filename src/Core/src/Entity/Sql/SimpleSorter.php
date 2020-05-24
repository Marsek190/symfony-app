<?php
declare(strict_types=1);

namespace Core\Entity\Sql;


use Core\BaseInterface\ISorter;

final class SimpleSorter implements ISorter
{
    private string $sortField;

    private string $sortOrder;

    public function __construct(string $sortField, string $sortOrder = self::ASC)
    {
        $this->sortField = $sortField;
        $this->sortOrder = $sortOrder;
    }

    public function toString(): string
    {
        return sprintf('%s %s', $this->sortField, $this->sortOrder);
    }
}