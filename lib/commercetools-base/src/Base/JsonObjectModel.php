<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Base;

use stdClass;

class JsonObjectModel extends BaseJsonObject implements JsonObject
{
    /**
     * @psalm-return scalar|array<int|string, mixed>|JsonObject|JsonObjectCollection|null
     */
    final public function get(string $field)
    {
        $data = $this->raw($field);
        if ($data instanceof stdClass) {
            return JsonObjectModel::of($data);
        }
        if (is_array($data) && isset($data[0]) && $data[0] instanceof stdClass) {
            /** @psalm-var ?array<int, stdClass> $data */
            return new JsonObjectCollection($data);
        }
        return $data;
    }

    final protected function toArray(): array
    {
        $data = array_filter(
            get_object_vars($this),
            /**
             * @psalm-param mixed|null $value
             * @return bool
             */
            function ($value) {
                return !is_null($value);
            }
        );
        $data = array_replace($this->getRawDataArray(), $data);
        return $data;
    }
}
