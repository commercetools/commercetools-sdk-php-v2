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
 * @extends ProductSearchQueryExpressionValueCollection<ProductSearchTimeRangeValue>
 * @method ProductSearchTimeRangeValue current()
 * @method ProductSearchTimeRangeValue end()
 * @method ProductSearchTimeRangeValue at($offset)
 */
class ProductSearchTimeRangeValueCollection extends ProductSearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert ProductSearchTimeRangeValue $value
     * @psalm-param ProductSearchTimeRangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchTimeRangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchTimeRangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchTimeRangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchTimeRangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchTimeRangeValue $data */
                $data = ProductSearchTimeRangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
