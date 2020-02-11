<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Delivery>
 * @method Delivery current()
 * @method Delivery at($offset)
 */
class DeliveryCollection extends MapperSequence
{
    /**
     * @psalm-assert Delivery $value
     * @psalm-param Delivery|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryCollection
     */
    public function add($value)
    {
        if (!$value instanceof Delivery) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Delivery
     */
    protected function mapper()
    {
        return function (int $index): ?Delivery {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DeliveryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
