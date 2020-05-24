<?php
declare(strict_types=1);

namespace App\BaseInterface;


use App\Exception\DatetimeError;
use App\Service\MoscowTime;

interface IDateTime
{
    /**
     * @throws DatetimeError | \Exception
     */
    public function convertDatetimeFieldsIntoDatetimeObjects();


    /**
     * @param string $dateFormat
     */
    public function convertDatetimeFieldsIntoStrings($dateFormat = MoscowTime::MYSQL_DATE_TIME_FORMAT);

    /**
     * @param $propName
     * @param null $time
     * @throws DatetimeError | \Exception
     */
    public function setTime(string $propName, $time = null);

}