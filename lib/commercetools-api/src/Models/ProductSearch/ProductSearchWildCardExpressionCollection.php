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
 * @extends ProductSearchQueryExpressionCollection<ProductSearchWildCardExpression>
 * @method ProductSearchWildCardExpression current()
 * @method ProductSearchWildCardExpression end()
 * @method ProductSearchWildCardExpression at($offset)
 */
class ProductSearchWildCardExpressionCollection extends ProductSearchQueryExpressionCollection
{
    /**
     * @psalm-assert ProductSearchWildCardExpression $value
     * @psalm-param ProductSearchWildCardExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchWildCardExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchWildCardExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchWildCardExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchWildCardExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchWildCardExpression $data */
                $data = ProductSearchWildCardExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
