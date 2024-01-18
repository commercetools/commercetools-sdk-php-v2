<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\ProductSearch\ProductSearchQueryExpressionValueCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductSearchQueryExpressionValueCollection<ProductSearchLongRangeValue>
 * @method ProductSearchLongRangeValue current()
 * @method ProductSearchLongRangeValue end()
 * @method ProductSearchLongRangeValue at($offset)
 */
class ProductSearchLongRangeValueCollection extends ProductSearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert ProductSearchLongRangeValue $value
     * @psalm-param ProductSearchLongRangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchLongRangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchLongRangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchLongRangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchLongRangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchLongRangeValue $data */
                $data = ProductSearchLongRangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
