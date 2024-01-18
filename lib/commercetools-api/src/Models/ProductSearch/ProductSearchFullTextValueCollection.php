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
 * @extends ProductSearchQueryExpressionValueCollection<ProductSearchFullTextValue>
 * @method ProductSearchFullTextValue current()
 * @method ProductSearchFullTextValue end()
 * @method ProductSearchFullTextValue at($offset)
 */
class ProductSearchFullTextValueCollection extends ProductSearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert ProductSearchFullTextValue $value
     * @psalm-param ProductSearchFullTextValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFullTextValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFullTextValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFullTextValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFullTextValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFullTextValue $data */
                $data = ProductSearchFullTextValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
