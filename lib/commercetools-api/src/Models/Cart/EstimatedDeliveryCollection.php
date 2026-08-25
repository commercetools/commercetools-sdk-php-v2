<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<EstimatedDelivery>
 * @method EstimatedDelivery current()
 * @method EstimatedDelivery end()
 * @method EstimatedDelivery at($offset)
 */
class EstimatedDeliveryCollection extends MapperSequence
{
    /**
     * @psalm-assert EstimatedDelivery $value
     * @psalm-param EstimatedDelivery|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EstimatedDeliveryCollection
     */
    public function add($value)
    {
        if (!$value instanceof EstimatedDelivery) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EstimatedDelivery
     */
    protected function mapper()
    {
        return function (?int $index): ?EstimatedDelivery {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var EstimatedDelivery $data */
                $data = EstimatedDeliveryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
