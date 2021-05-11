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
 * @extends AttributeTypeCollection<AttributeNestedType>
 * @method AttributeNestedType current()
 * @method AttributeNestedType at($offset)
 */
class AttributeNestedTypeCollection extends AttributeTypeCollection
{
    /**
     * @psalm-assert AttributeNestedType $value
     * @psalm-param AttributeNestedType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeNestedTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeNestedType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeNestedType
     */
    protected function mapper()
    {
        return function (int $index): ?AttributeNestedType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeNestedType $data */
                $data = AttributeNestedTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
