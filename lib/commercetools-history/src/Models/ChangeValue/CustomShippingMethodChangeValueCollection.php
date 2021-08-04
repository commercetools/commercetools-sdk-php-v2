<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomShippingMethodChangeValue>
 * @method CustomShippingMethodChangeValue current()
 * @method CustomShippingMethodChangeValue end()
 * @method CustomShippingMethodChangeValue at($offset)
 */
class CustomShippingMethodChangeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomShippingMethodChangeValue $value
     * @psalm-param CustomShippingMethodChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomShippingMethodChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomShippingMethodChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomShippingMethodChangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomShippingMethodChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomShippingMethodChangeValue $data */
                $data = CustomShippingMethodChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
