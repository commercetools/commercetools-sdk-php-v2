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
 * @extends MapperSequence<ProductVariantChannelAvailabilityMap>
 * @method ProductVariantChannelAvailabilityMap current()
 * @method ProductVariantChannelAvailabilityMap end()
 * @method ProductVariantChannelAvailabilityMap at($offset)
 */
class ProductVariantChannelAvailabilityMapCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantChannelAvailabilityMap $value
     * @psalm-param ProductVariantChannelAvailabilityMap|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantChannelAvailabilityMapCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantChannelAvailabilityMap) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantChannelAvailabilityMap
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantChannelAvailabilityMap {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantChannelAvailabilityMap $data */
                $data = ProductVariantChannelAvailabilityMapModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
