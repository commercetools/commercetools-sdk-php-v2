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
 * @extends AttributeTypeCollection<AttributeSetType>
 * @method AttributeSetType current()
 * @method AttributeSetType at($offset)
 */
class AttributeSetTypeCollection extends AttributeTypeCollection
{
    /**
     * @psalm-assert AttributeSetType $value
     * @psalm-param AttributeSetType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeSetTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeSetType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeSetType
     */
    protected function mapper()
    {
        return function (int $index): ?AttributeSetType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeSetType $data */
                $data = AttributeSetTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
