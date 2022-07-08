<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\ProductSelection\ProductVariantSelectionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductVariantSelectionCollection<ProductVariantSelectionInclusion>
 * @method ProductVariantSelectionInclusion current()
 * @method ProductVariantSelectionInclusion end()
 * @method ProductVariantSelectionInclusion at($offset)
 */
class ProductVariantSelectionInclusionCollection extends ProductVariantSelectionCollection
{
    /**
     * @psalm-assert ProductVariantSelectionInclusion $value
     * @psalm-param ProductVariantSelectionInclusion|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantSelectionInclusionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantSelectionInclusion) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantSelectionInclusion
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantSelectionInclusion {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantSelectionInclusion $data */
                $data = ProductVariantSelectionInclusionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
