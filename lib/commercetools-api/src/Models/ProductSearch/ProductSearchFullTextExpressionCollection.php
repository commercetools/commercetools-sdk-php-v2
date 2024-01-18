<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\ProductSearch\ProductSearchQueryExpressionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductSearchQueryExpressionCollection<ProductSearchFullTextExpression>
 * @method ProductSearchFullTextExpression current()
 * @method ProductSearchFullTextExpression end()
 * @method ProductSearchFullTextExpression at($offset)
 */
class ProductSearchFullTextExpressionCollection extends ProductSearchQueryExpressionCollection
{
    /**
     * @psalm-assert ProductSearchFullTextExpression $value
     * @psalm-param ProductSearchFullTextExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchFullTextExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchFullTextExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchFullTextExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchFullTextExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchFullTextExpression $data */
                $data = ProductSearchFullTextExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
