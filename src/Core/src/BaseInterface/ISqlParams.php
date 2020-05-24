<?php
declare(strict_types=1);

namespace Core\BaseInterface;


interface ISqlParams
{
    public function getLimit(): int;
    public function getOffset(): int;
    public function getSorter(): ISorter;
}