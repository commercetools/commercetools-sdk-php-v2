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
 * @extends MapperSequence<ShippingInfo>
 * @method ShippingInfo current()
 * @method ShippingInfo at($offset)
 */
class ShippingInfoCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingInfo $value
     * @psalm-param ShippingInfo|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingInfoCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingInfo) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingInfo
     */
    protected function mapper()
    {
        return function (int $index): ?ShippingInfo {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingInfoModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
