<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Base;

use Commercetools\Exception\InvalidArgumentException;

/**
 * @extends MapperSequence<JsonObject>
 * @method JsonObject current()
 * @method JsonObject at($offset)
 */
class JsonObjectCollection extends MapperSequence
{
    /**
     * @psalm-assert JsonObject $value
     * @psalm-param JsonObject|object $value
     * @return JsonObjectCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof JsonObject) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?JsonObject
     */
    protected function mapper()
    {
        return function(int $index): ?JsonObject {
            $data = $this->get($index);
            if (!is_null($data) && !$data instanceof JsonObject) {
                $data = JsonObjectModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}
