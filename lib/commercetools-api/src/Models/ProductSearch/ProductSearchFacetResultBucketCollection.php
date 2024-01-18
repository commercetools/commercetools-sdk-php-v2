<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductSearchFacetResultBucket>
 * @method ProductSearchFacetResultBucket current()
 * @method ProductSearchFacetResultBucket end()
 * @method ProductSearchFacetResultBucket at($offset)
 */
class ProductSearchFacetResultBucketCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchFacetResultBucket $value
     * @psalm-param ProductSearchFacetResultBucket|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetResultBucketCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetResultBucket) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetResultBucket
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetResultBucket {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetResultBucket $data */
                $data = ProductSearchFacetResultBucketModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
