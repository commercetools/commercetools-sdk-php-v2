<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Base;

use stdClass;

abstract class BaseJsonObject implements JsonObject
{
    /** @psalm-var ?stdClass */
    private $rawData;

    /**
     * @psalm-param ?stdClass|array<string, mixed> $data
     * @return static
     */
    final public static function of($data = null)
    {
        if (is_array($data)) {
            return self::fromArray($data);
        }
        return self::fromStdClass($data);
    }

    /**
     * @psalm-param ?stdClass $data
     * @return static
     */
    final public static function fromStdClass(stdClass $data = null)
    {
        $t = new static();
        $t->rawData = $data;
        return $t;
    }

    /**
     * @psalm-param array<string, mixed> $data
     * @return static
     */
    final public static function fromArray(array $data = [])
    {
        return self::fromStdClass((object)$data);
    }

    /**
     * @psalm-return scalar|array<int, mixed>|array<string, mixed>|stdClass|null
     */
    final protected function raw(string $field)
    {
        if (isset($this->rawData->$field)) {
            /**
             * @psalm-suppress PossiblyNullPropertyFetch
             * @psalm-var scalar|array<int, mixed>|array<string, mixed>|stdClass|null
             */
            return $this->rawData->$field;
        }
        return null;
    }

    public function jsonSerialize()
    {
        return (object)$this->toArray();
    }

    /**
     * @return array
     */
    final protected function getRawDataArray(): array
    {
        if (is_null($this->rawData)) {
            return [];
        }
        return get_object_vars($this->rawData);
    }

    /**
     * @return array
     */
    abstract protected function toArray(): array;
}
