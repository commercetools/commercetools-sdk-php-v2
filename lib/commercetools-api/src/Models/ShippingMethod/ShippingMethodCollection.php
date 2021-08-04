<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<ShippingMethod>
 * @method ShippingMethod current()
 * @method ShippingMethod at($offset)
 */
class ShippingMethodCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert ShippingMethod $value
     * @psalm-param ShippingMethod|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethod) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethod
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethod {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethod $data */
                $data = ShippingMethodModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
