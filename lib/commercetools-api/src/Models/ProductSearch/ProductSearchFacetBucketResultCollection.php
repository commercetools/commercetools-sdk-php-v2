<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\ProductSearch\ProductSearchFacetResultExpressionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductSearchFacetResultExpressionCollection<ProductSearchFacetBucketResult>
 * @method ProductSearchFacetBucketResult current()
 * @method ProductSearchFacetBucketResult end()
 * @method ProductSearchFacetBucketResult at($offset)
 */
class ProductSearchFacetBucketResultCollection extends ProductSearchFacetResultExpressionCollection
{
    /**
     * @psalm-assert ProductSearchFacetBucketResult $value
     * @psalm-param ProductSearchFacetBucketResult|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetBucketResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetBucketResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetBucketResult
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetBucketResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetBucketResult $data */
                $data = ProductSearchFacetBucketResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
