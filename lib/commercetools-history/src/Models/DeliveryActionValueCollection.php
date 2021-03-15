<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DeliveryActionValue>
 * @method DeliveryActionValue current()
 * @method DeliveryActionValue at($offset)
 */
class DeliveryActionValueCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryActionValue $value
     * @psalm-param DeliveryActionValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryActionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryActionValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryActionValue
     */
    protected function mapper()
    {
        return function (int $index): ?DeliveryActionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DeliveryActionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
