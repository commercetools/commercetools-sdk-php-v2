<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Producttypes\AttributeTypeCollection;
use stdClass;

/**
 * @extends AttributeTypeCollection<AttributeBooleanType>
 * @method AttributeBooleanType current()
 * @method AttributeBooleanType end()
 * @method AttributeBooleanType at($offset)
 */
class AttributeBooleanTypeCollection extends AttributeTypeCollection
{
    /**
     * @psalm-assert AttributeBooleanType $value
     * @psalm-param AttributeBooleanType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeBooleanTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeBooleanType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeBooleanType
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeBooleanType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeBooleanType $data */
                $data = AttributeBooleanTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
