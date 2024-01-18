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
 * @extends MapperSequence<ProductSearchFacetDistinctValue>
 * @method ProductSearchFacetDistinctValue current()
 * @method ProductSearchFacetDistinctValue end()
 * @method ProductSearchFacetDistinctValue at($offset)
 */
class ProductSearchFacetDistinctValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchFacetDistinctValue $value
     * @psalm-param ProductSearchFacetDistinctValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetDistinctValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetDistinctValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetDistinctValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetDistinctValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetDistinctValue $data */
                $data = ProductSearchFacetDistinctValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
