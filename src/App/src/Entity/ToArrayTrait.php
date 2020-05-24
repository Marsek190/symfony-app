<?php
declare(strict_types=1);

namespace App\Entity;


use App\Service\MoscowTime;

trait ToArrayTrait
{
    /**
     * @param bool $dateFormat
     * @return array
     */
    public function toArray($dateFormat = false) : array
    {
        $result = $this->getAllProps();

        foreach ($result as $prop => $value) {
            if ($value instanceof MoscowTime) {
                if($dateFormat){
                    /**
                     * @var MoscowTime $value
                     */
                    $result[$prop] = $value->format($dateFormat);
                } else {
                    /**
                     * @var MoscowTime $value
                     */
                    $result[$prop] = $value->getTimestamp();
                }
            }
        }

        return $result;
    }
}