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
 * @extends MapperSequence<ProductSearchFacetCountValue>
 * @method ProductSearchFacetCountValue current()
 * @method ProductSearchFacetCountValue end()
 * @method ProductSearchFacetCountValue at($offset)
 */
class ProductSearchFacetCountValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchFacetCountValue $value
     * @psalm-param ProductSearchFacetCountValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFacetCountValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFacetCountValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFacetCountValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFacetCountValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFacetCountValue $data */
                $data = ProductSearchFacetCountValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
