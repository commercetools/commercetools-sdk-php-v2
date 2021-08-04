<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\ProductType\AttributeTypeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends AttributeTypeCollection<AttributeDateType>
 * @method AttributeDateType current()
 * @method AttributeDateType at($offset)
 */
class AttributeDateTypeCollection extends AttributeTypeCollection
{
    /**
     * @psalm-assert AttributeDateType $value
     * @psalm-param AttributeDateType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeDateTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeDateType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeDateType
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeDateType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeDateType $data */
                $data = AttributeDateTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
