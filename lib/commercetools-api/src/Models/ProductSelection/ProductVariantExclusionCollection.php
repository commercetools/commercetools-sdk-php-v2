<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductVariantExclusion>
 * @method ProductVariantExclusion current()
 * @method ProductVariantExclusion end()
 * @method ProductVariantExclusion at($offset)
 */
class ProductVariantExclusionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantExclusion $value
     * @psalm-param ProductVariantExclusion|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantExclusionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantExclusion) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantExclusion
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantExclusion {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantExclusion $data */
                $data = ProductVariantExclusionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
