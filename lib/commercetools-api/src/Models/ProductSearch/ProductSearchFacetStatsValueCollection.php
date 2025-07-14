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
 * @extends MapperSequence<ProductSearchFacetStatsValue>
 * @method ProductSearchFacetStatsValue current()
 * @method ProductSearchFacetStatsValue end()
 * @method ProductSearchFacetStatsValue at($offset)
 */
class ProductSearchFacetStatsValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchFacetStatsValue $value
     * @psalm-param ProductSearchFacetStatsValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetStatsValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetStatsValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetStatsValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetStatsValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetStatsValue $data */
                $data = ProductSearchFacetStatsValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
