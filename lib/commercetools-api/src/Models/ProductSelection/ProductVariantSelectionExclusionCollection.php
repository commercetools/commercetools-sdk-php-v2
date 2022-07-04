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
 * @extends ProductVariantSelectionCollection<ProductVariantSelectionExclusion>
 * @method ProductVariantSelectionExclusion current()
 * @method ProductVariantSelectionExclusion end()
 * @method ProductVariantSelectionExclusion at($offset)
 */
class ProductVariantSelectionExclusionCollection extends ProductVariantSelectionCollection
{
    /**
     * @psalm-assert ProductVariantSelectionExclusion $value
     * @psalm-param ProductVariantSelectionExclusion|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantSelectionExclusionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantSelectionExclusion) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantSelectionExclusion
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantSelectionExclusion {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantSelectionExclusion $data */
                $data = ProductVariantSelectionExclusionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
