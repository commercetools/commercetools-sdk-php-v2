<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ResourceCreatedDelivery>
 * @method ResourceCreatedDelivery current()
 * @method ResourceCreatedDelivery at($offset)
 */
class ResourceCreatedDeliveryCollection extends MapperSequence
{
    /**
     * @psalm-assert ResourceCreatedDelivery $value
     * @psalm-param ResourceCreatedDelivery|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ResourceCreatedDeliveryCollection
     */
    public function add($value)
    {
        if (!$value instanceof ResourceCreatedDelivery) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ResourceCreatedDelivery
     */
    protected function mapper()
    {
        return function (int $index): ?ResourceCreatedDelivery {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ResourceCreatedDeliveryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
