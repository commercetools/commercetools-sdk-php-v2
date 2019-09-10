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
 * @extends MapperSequence<ShippingRateDraft>
 *
 * @method ShippingRateDraft current()
 * @method ShippingRateDraft at($offset)
 */
class ShippingRateDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingRateDraft $value
     * @psalm-param ShippingRateDraft|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ShippingRateDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingRateDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingRateDraft
     */
    protected function mapper()
    {
        return function (int $index): ?ShippingRateDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingRateDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
