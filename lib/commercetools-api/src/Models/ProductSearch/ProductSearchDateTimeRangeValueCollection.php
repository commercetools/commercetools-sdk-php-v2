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
 * @extends ProductSearchQueryExpressionValueCollection<ProductSearchDateTimeRangeValue>
 * @method ProductSearchDateTimeRangeValue current()
 * @method ProductSearchDateTimeRangeValue end()
 * @method ProductSearchDateTimeRangeValue at($offset)
 */
class ProductSearchDateTimeRangeValueCollection extends ProductSearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert ProductSearchDateTimeRangeValue $value
     * @psalm-param ProductSearchDateTimeRangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchDateTimeRangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchDateTimeRangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchDateTimeRangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchDateTimeRangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchDateTimeRangeValue $data */
                $data = ProductSearchDateTimeRangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
