<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductVariantAvailability>
 * @method ProductVariantAvailability current()
 * @method ProductVariantAvailability at($offset)
 */
class ProductVariantAvailabilityCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantAvailability $value
     * @psalm-param ProductVariantAvailability|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantAvailabilityCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantAvailability) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantAvailability
     */
    protected function mapper()
    {
        return function (int $index): ?ProductVariantAvailability {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantAvailability $data */
                $data = ProductVariantAvailabilityModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
