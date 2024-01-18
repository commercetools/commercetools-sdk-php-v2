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
 * @extends ProductSearchQueryExpressionValueCollection<ProductSearchNumberRangeValue>
 * @method ProductSearchNumberRangeValue current()
 * @method ProductSearchNumberRangeValue end()
 * @method ProductSearchNumberRangeValue at($offset)
 */
class ProductSearchNumberRangeValueCollection extends ProductSearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert ProductSearchNumberRangeValue $value
     * @psalm-param ProductSearchNumberRangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchNumberRangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchNumberRangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchNumberRangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchNumberRangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchNumberRangeValue $data */
                $data = ProductSearchNumberRangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
