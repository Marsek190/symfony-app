<?php
declare(strict_types=1);

namespace Core\Entity;


use App\BaseInterface\IConvertToArray;
use App\BaseInterface\IDateTime;
use App\BaseInterface\IGetAllProps;
use App\Entity\DateTimeTrait;
use App\Entity\GetAllPropsTrait;
use App\Entity\ToArrayTrait;

abstract class AbstractRootEntity implements IDateTime, IConvertToArray, IGetAllProps
{
    use ToArrayTrait;
    use DateTimeTrait;
    use GetAllPropsTrait {
        GetAllPropsTrait::getAllProps as getAllPropsFromTrait;
    }

    /**
     * @return array
     */
    public function getAllProps(): array
    {
        $props = $this->getAllPropsFromTrait();

        unset($props['datetimeFields']);

        return $props;
    }

    /**
     * @return mixed
     */
    public abstract function getId();
}