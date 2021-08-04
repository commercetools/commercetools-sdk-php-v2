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
 * @extends MapperSequence<ProductVariant>
 * @method ProductVariant current()
 * @method ProductVariant at($offset)
 */
class ProductVariantCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariant $value
     * @psalm-param ProductVariant|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariant) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariant
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariant {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariant $data */
                $data = ProductVariantModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
