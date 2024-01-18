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
 * @extends ProductSearchQueryExpressionValueCollection<ProductSearchExistsValue>
 * @method ProductSearchExistsValue current()
 * @method ProductSearchExistsValue end()
 * @method ProductSearchExistsValue at($offset)
 */
class ProductSearchExistsValueCollection extends ProductSearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert ProductSearchExistsValue $value
     * @psalm-param ProductSearchExistsValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchExistsValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchExistsValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchExistsValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchExistsValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchExistsValue $data */
                $data = ProductSearchExistsValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
