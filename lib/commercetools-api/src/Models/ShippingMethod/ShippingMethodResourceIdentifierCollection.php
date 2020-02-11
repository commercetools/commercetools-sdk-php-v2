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
 * @extends MapperSequence<ShippingMethodResourceIdentifier>
 * @method ShippingMethodResourceIdentifier current()
 * @method ShippingMethodResourceIdentifier at($offset)
 */
class ShippingMethodResourceIdentifierCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodResourceIdentifier $value
     * @psalm-param ShippingMethodResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?ShippingMethodResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingMethodResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
