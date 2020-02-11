<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductVariantChannelAvailability>
 * @method ProductVariantChannelAvailability current()
 * @method ProductVariantChannelAvailability at($offset)
 */
class ProductVariantChannelAvailabilityCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantChannelAvailability $value
     * @psalm-param ProductVariantChannelAvailability|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantChannelAvailabilityCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantChannelAvailability) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantChannelAvailability
     */
    protected function mapper()
    {
        return function (int $index): ?ProductVariantChannelAvailability {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductVariantChannelAvailabilityModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
