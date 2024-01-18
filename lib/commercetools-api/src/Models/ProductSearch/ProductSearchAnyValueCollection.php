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
 * @extends ProductSearchQueryExpressionValueCollection<ProductSearchAnyValue>
 * @method ProductSearchAnyValue current()
 * @method ProductSearchAnyValue end()
 * @method ProductSearchAnyValue at($offset)
 */
class ProductSearchAnyValueCollection extends ProductSearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert ProductSearchAnyValue $value
     * @psalm-param ProductSearchAnyValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchAnyValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchAnyValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchAnyValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchAnyValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchAnyValue $data */
                $data = ProductSearchAnyValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
