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
 * @extends ProductVariantSelectionCollection<ProductVariantSelectionIncludeAllExcept>
 * @method ProductVariantSelectionIncludeAllExcept current()
 * @method ProductVariantSelectionIncludeAllExcept end()
 * @method ProductVariantSelectionIncludeAllExcept at($offset)
 */
class ProductVariantSelectionIncludeAllExceptCollection extends ProductVariantSelectionCollection
{
    /**
     * @psalm-assert ProductVariantSelectionIncludeAllExcept $value
     * @psalm-param ProductVariantSelectionIncludeAllExcept|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantSelectionIncludeAllExceptCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantSelectionIncludeAllExcept) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantSelectionIncludeAllExcept
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantSelectionIncludeAllExcept {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantSelectionIncludeAllExcept $data */
                $data = ProductVariantSelectionIncludeAllExceptModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
