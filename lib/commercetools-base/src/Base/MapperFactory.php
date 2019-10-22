<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Base;

use DateTimeImmutable;

class MapperFactory
{
    const TIME_FORMAT = 'H:i:s.u';
    const DATE_FORMAT = 'Y-m-d';
    const DATETIME_FORMAT = 'Y-m-d?H:i:s.uT';

    /**
     * @psalm-return callable(mixed): ?string
     */
    public static function stringMapper()
    {
        return
           /** @psalm-param ?mixed $data */
           function ($data): ?string {
               if (is_null($data)) {
                   return null;
               }

               return (string) $data;
           };
    }

    /**
     * @psalm-return callable(?mixed): ?float
     */
    public static function numberMapper()
    {
        return
           /** @psalm-param ?mixed $data */
           function ($data): ?float {
               if (is_null($data)) {
                   return null;
               }

               return (float) $data;
           };
    }

    /**
     * @psalm-return callable(?mixed): ?int
     */
    public static function integerMapper()
    {
        return
           /** @psalm-param ?mixed $data */
           function ($data): ?int {
               if (is_null($data)) {
                   return null;
               }

               return (int) $data;
           };
    }

    /**
     * @psalm-return callable(?string): ?DateTimeImmutable
     */
    public static function dateTimeMapper(string $format = self::DATETIME_FORMAT)
    {
        return
           /** @psalm-param ?string $data */
           function ($data) use ($format): ?DateTimeImmutable {
               if (is_null($data)) {
                   return null;
               }
               $date = DateTimeImmutable::createFromFormat($format, $data);
               if (false === $date) {
                   return null;
               }

               return $date;
           };
    }

    /**
     * @template T
     * @psalm-return callable(?mixed): ?T
     * @psalm-param class-string<T> $className
     */
    public static function classMapper(string $className)
    {
        return
           /**
            * @psalm-param ?mixed $data
            * @psalm-return ?T
            *
            * @param mixed $data
            */
           function ($data) use ($className): ?object {
               if (is_null($data)) {
                   return null;
               }

               return new $className($data);
           };
    }
}
