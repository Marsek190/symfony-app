<?php
declare(strict_types=1);

namespace App\Entity;


use App\Exception\DatetimeError;
use App\Service\MoscowTime;

trait DateTimeTrait
{
    /**
     * @var array
     */
    protected array $datetimeFields = [];

    /**
     * @throws \Exception|DatetimeError
     */
    public function convertDatetimeFieldsIntoDatetimeObjects() : void
    {
        foreach ($this->datetimeFields as $datetimeField) {
            $this->setTime($datetimeField, $this->$datetimeField);
        }
    }


    /**
     * @param string $dateFormat
     */
    public function convertDatetimeFieldsIntoStrings($dateFormat = MoscowTime::MYSQL_DATE_TIME_FORMAT) : void
    {
        /**
         * @var string $datetimeField
         */
        foreach ($this->datetimeFields as $datetimeField) {
            if ($this->$datetimeField instanceof MoscowTime) {

                /**
                 * @var MoscowTime $object
                 */
                $object = $this->$datetimeField;

                $this->$datetimeField = $object->format($dateFormat);
            }
        }
    }

    /**
     * @param $propName
     * @param null $time
     * @throws \Exception|DatetimeError
     */
    public function setTime(string $propName, $time = null)
    {
        if (!in_array($propName, $this->datetimeFields)) {
            $this->datetimeFields[] = $propName;
        }

        //если время равно null, то установим "как есть"
        if (is_null($time)) {
            $this->$propName = $time;
            return;
        }

        try {
            $this->$propName = MoscowTime::createFromAnyTime($time);
        } catch (DatetimeError $e) {
            throw new DatetimeError('Cant create DateTime from: ' . $time);
        }
    }
}