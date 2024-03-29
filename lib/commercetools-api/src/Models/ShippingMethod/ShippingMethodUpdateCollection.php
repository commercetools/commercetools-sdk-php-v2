<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShippingMethodUpdate>
 * @method ShippingMethodUpdate current()
 * @method ShippingMethodUpdate end()
 * @method ShippingMethodUpdate at($offset)
 */
class ShippingMethodUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodUpdate $value
     * @psalm-param ShippingMethodUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodUpdate $data */
                $data = ShippingMethodUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
