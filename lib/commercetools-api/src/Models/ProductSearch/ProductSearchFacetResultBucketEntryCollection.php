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
 * @extends MapperSequence<ProductSearchFacetResultBucketEntry>
 * @method ProductSearchFacetResultBucketEntry current()
 * @method ProductSearchFacetResultBucketEntry end()
 * @method ProductSearchFacetResultBucketEntry at($offset)
 */
class ProductSearchFacetResultBucketEntryCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchFacetResultBucketEntry $value
     * @psalm-param ProductSearchFacetResultBucketEntry|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetResultBucketEntryCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetResultBucketEntry) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetResultBucketEntry
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetResultBucketEntry {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetResultBucketEntry $data */
                $data = ProductSearchFacetResultBucketEntryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
