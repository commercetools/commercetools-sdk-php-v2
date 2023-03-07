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
 * @extends ProductVariantSelectionCollection<ProductVariantSelectionIncludeOnly>
 * @method ProductVariantSelectionIncludeOnly current()
 * @method ProductVariantSelectionIncludeOnly end()
 * @method ProductVariantSelectionIncludeOnly at($offset)
 */
class ProductVariantSelectionIncludeOnlyCollection extends ProductVariantSelectionCollection
{
    /**
     * @psalm-assert ProductVariantSelectionIncludeOnly $value
     * @psalm-param ProductVariantSelectionIncludeOnly|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantSelectionIncludeOnlyCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantSelectionIncludeOnly) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantSelectionIncludeOnly
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantSelectionIncludeOnly {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantSelectionIncludeOnly $data */
                $data = ProductVariantSelectionIncludeOnlyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
