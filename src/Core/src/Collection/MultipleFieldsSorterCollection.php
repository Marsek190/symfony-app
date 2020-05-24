<?php
declare(strict_types=1);

namespace Core\Collection;


use App\BaseInterface\IStringable;
use Core\BaseInterface\ISorter;

final class MultipleFieldsSorterCollection implements IStringable
{
    private array $container = [];

    public function offsetSet(string $field, string $order = ISorter::ASC): void
    {
        if ($order != ISorter::ASC || $order != ISorter::DESC) {
            throw new \RuntimeException('');
        }

        $this->container[$field] = strtoupper($order);
    }

    public function toString(): string
    {
        $sqlOrderByToString = '';
        $commaSeparator = ',';
        foreach ($this->container as $field => $order) {
            $sqlOrderByToString .= sprintf('%s %s%s', $field, $order, $commaSeparator);
        }

        return $sqlOrderByToString;
    }
}