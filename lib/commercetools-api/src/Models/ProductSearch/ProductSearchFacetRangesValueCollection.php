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
 * @extends MapperSequence<ProductSearchFacetRangesValue>
 * @method ProductSearchFacetRangesValue current()
 * @method ProductSearchFacetRangesValue end()
 * @method ProductSearchFacetRangesValue at($offset)
 */
class ProductSearchFacetRangesValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchFacetRangesValue $value
     * @psalm-param ProductSearchFacetRangesValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetRangesValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetRangesValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetRangesValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetRangesValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetRangesValue $data */
                $data = ProductSearchFacetRangesValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
