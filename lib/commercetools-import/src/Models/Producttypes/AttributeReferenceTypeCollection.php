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
 * @extends AttributeTypeCollection<AttributeReferenceType>
 * @method AttributeReferenceType current()
 * @method AttributeReferenceType end()
 * @method AttributeReferenceType at($offset)
 */
class AttributeReferenceTypeCollection extends AttributeTypeCollection
{
    /**
     * @psalm-assert AttributeReferenceType $value
     * @psalm-param AttributeReferenceType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeReferenceTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeReferenceType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeReferenceType
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeReferenceType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeReferenceType $data */
                $data = AttributeReferenceTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
