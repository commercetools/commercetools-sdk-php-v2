<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\ProductSearch\ProductSearchSuggestionExpressionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductSearchSuggestionExpressionCollection<ProductSearchSuggestionCompletionExpression>
 * @method ProductSearchSuggestionCompletionExpression current()
 * @method ProductSearchSuggestionCompletionExpression end()
 * @method ProductSearchSuggestionCompletionExpression at($offset)
 */
class ProductSearchSuggestionCompletionExpressionCollection extends ProductSearchSuggestionExpressionCollection
{
    /**
     * @psalm-assert ProductSearchSuggestionCompletionExpression $value
     * @psalm-param ProductSearchSuggestionCompletionExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchSuggestionCompletionExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchSuggestionCompletionExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchSuggestionCompletionExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchSuggestionCompletionExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchSuggestionCompletionExpression $data */
                $data = ProductSearchSuggestionCompletionExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
