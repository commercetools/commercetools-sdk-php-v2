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
 * @extends ProductSearchQueryExpressionValueCollection<ProductSearchDateRangeValue>
 * @method ProductSearchDateRangeValue current()
 * @method ProductSearchDateRangeValue end()
 * @method ProductSearchDateRangeValue at($offset)
 */
class ProductSearchDateRangeValueCollection extends ProductSearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert ProductSearchDateRangeValue $value
     * @psalm-param ProductSearchDateRangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchDateRangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchDateRangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchDateRangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchDateRangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchDateRangeValue $data */
                $data = ProductSearchDateRangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
