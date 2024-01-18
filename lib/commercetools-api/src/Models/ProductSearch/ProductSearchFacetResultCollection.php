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
 * @extends MapperSequence<ProductSearchFacetResult>
 * @method ProductSearchFacetResult current()
 * @method ProductSearchFacetResult end()
 * @method ProductSearchFacetResult at($offset)
 */
class ProductSearchFacetResultCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchFacetResult $value
     * @psalm-param ProductSearchFacetResult|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetResult
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetResult $data */
                $data = ProductSearchFacetResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
