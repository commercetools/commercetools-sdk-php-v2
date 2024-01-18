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
 * @extends MapperSequence<ProductSearchFacetDistinctStartsWith>
 * @method ProductSearchFacetDistinctStartsWith current()
 * @method ProductSearchFacetDistinctStartsWith end()
 * @method ProductSearchFacetDistinctStartsWith at($offset)
 */
class ProductSearchFacetDistinctStartsWithCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchFacetDistinctStartsWith $value
     * @psalm-param ProductSearchFacetDistinctStartsWith|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetDistinctStartsWithCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetDistinctStartsWith) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetDistinctStartsWith
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetDistinctStartsWith {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetDistinctStartsWith $data */
                $data = ProductSearchFacetDistinctStartsWithModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
