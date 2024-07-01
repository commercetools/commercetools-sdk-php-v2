<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductVariantTailoring>
 * @method ProductVariantTailoring current()
 * @method ProductVariantTailoring end()
 * @method ProductVariantTailoring at($offset)
 */
class ProductVariantTailoringCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantTailoring $value
     * @psalm-param ProductVariantTailoring|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantTailoringCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantTailoring) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantTailoring
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantTailoring {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantTailoring $data */
                $data = ProductVariantTailoringModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
