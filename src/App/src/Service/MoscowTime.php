<?php
declare(strict_types=1);

namespace App\Service;


use App\Exception\DatetimeError;
use DateTimeZone;

class MoscowTime extends \DateTime
{
    const MYSQL_DATE_TIME_FORMAT = "Y-m-d H:i:s";

    /**
     * MoscowTime constructor.
     * @param string $time
     * @param DateTimeZone|null $timezone
     * @throws \Exception
     */
    public function __construct($time = 'now', DateTimeZone $timezone = null)
    {
        parent::__construct($time, new DateTimeZone('Europe/Moscow'));
    }

    /**
     * @param $time
     * @return MoscowTime
     * @throws \Exception
     */
    public static function createFromAnyTime($time): MoscowTime
    {
        //если $time - это объект \DateTime
        if ($time instanceof \DateTime) {
            $dateTime = new static($time->format(\DateTime::ATOM));
            return $dateTime;
        }

        //если $time - это валидный timestamp
        if (static::isValidTimeStamp($time)) { //timestamp
            $dateTime = new static();
            $dateTime->setTimestamp((int)$time);
            return $dateTime;
        }

        //если $time - это строка времени
        try {
            $dateTime = new static($time);
        } catch (\Exception $e) {
            throw new DatetimeError($e->getMessage());
        }
        if ($dateTime) {
            return $dateTime;
        }

        throw new DatetimeError("Unable to create DateTime from given string.");
    }

    /**
     * @param $timestamp
     * @return bool
     */
    private static function isValidTimeStamp($timestamp)
    {
        $check = (is_int($timestamp) || is_float($timestamp)) ? $timestamp : (string)(int)$timestamp;

        return ($check === $timestamp) && ((int)$timestamp <= PHP_INT_MAX) && ((int)$timestamp >= ~PHP_INT_MAX);
    }
}