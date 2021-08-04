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
 * @extends AttributeTypeCollection<AttributeMoneyType>
 * @method AttributeMoneyType current()
 * @method AttributeMoneyType at($offset)
 */
class AttributeMoneyTypeCollection extends AttributeTypeCollection
{
    /**
     * @psalm-assert AttributeMoneyType $value
     * @psalm-param AttributeMoneyType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeMoneyTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeMoneyType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeMoneyType
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeMoneyType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeMoneyType $data */
                $data = AttributeMoneyTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
