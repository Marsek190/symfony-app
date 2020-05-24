<?php
declare(strict_types=1);

namespace App\BaseInterface;


interface IConvertToArray
{
    public function toArray($dateFormat = false) : array;
}