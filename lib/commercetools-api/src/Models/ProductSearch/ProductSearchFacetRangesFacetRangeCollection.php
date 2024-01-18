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
 * @extends MapperSequence<ProductSearchFacetRangesFacetRange>
 * @method ProductSearchFacetRangesFacetRange current()
 * @method ProductSearchFacetRangesFacetRange end()
 * @method ProductSearchFacetRangesFacetRange at($offset)
 */
class ProductSearchFacetRangesFacetRangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchFacetRangesFacetRange $value
     * @psalm-param ProductSearchFacetRangesFacetRange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetRangesFacetRangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetRangesFacetRange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetRangesFacetRange
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetRangesFacetRange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetRangesFacetRange $data */
                $data = ProductSearchFacetRangesFacetRangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
