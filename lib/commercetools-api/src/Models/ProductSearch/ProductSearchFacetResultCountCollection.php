<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\ProductSearch\ProductSearchFacetResultCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductSearchFacetResultCollection<ProductSearchFacetResultCount>
 * @method ProductSearchFacetResultCount current()
 * @method ProductSearchFacetResultCount end()
 * @method ProductSearchFacetResultCount at($offset)
 */
class ProductSearchFacetResultCountCollection extends ProductSearchFacetResultCollection
{
    /**
     * @psalm-assert ProductSearchFacetResultCount $value
     * @psalm-param ProductSearchFacetResultCount|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetResultCountCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetResultCount) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetResultCount
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetResultCount {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetResultCount $data */
                $data = ProductSearchFacetResultCountModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
