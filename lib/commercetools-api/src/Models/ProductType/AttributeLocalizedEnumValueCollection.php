<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AttributeLocalizedEnumValue>
 * @method AttributeLocalizedEnumValue current()
 * @method AttributeLocalizedEnumValue end()
 * @method AttributeLocalizedEnumValue at($offset)
 */
class AttributeLocalizedEnumValueCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeLocalizedEnumValue $value
     * @psalm-param AttributeLocalizedEnumValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeLocalizedEnumValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeLocalizedEnumValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeLocalizedEnumValue
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeLocalizedEnumValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeLocalizedEnumValue $data */
                $data = AttributeLocalizedEnumValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
