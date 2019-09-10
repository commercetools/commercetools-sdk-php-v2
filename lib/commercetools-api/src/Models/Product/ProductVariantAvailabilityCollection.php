<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

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
     * @return ProductVariantAvailabilityCollection
     * @throws InvalidArgumentException
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
        return function(int $index): ?ProductVariantAvailability {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductVariantAvailabilityModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}