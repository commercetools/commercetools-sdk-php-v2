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
 * @extends ProductSearchFacetResultCollection<ProductSearchFacetResultStats>
 * @method ProductSearchFacetResultStats current()
 * @method ProductSearchFacetResultStats end()
 * @method ProductSearchFacetResultStats at($offset)
 */
class ProductSearchFacetResultStatsCollection extends ProductSearchFacetResultCollection
{
    /**
     * @psalm-assert ProductSearchFacetResultStats $value
     * @psalm-param ProductSearchFacetResultStats|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetResultStatsCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetResultStats) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetResultStats
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetResultStats {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetResultStats $data */
                $data = ProductSearchFacetResultStatsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
