<?php
declare(strict_types=1);

namespace Core\BaseInterface;


use App\BaseInterface\IStringable;

interface ISorter extends IStringable
{
    const ASC = 'ASC';
    const DESC = 'DESC';
}