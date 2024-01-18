<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\ProductSearch\ProductSearchSuggestionExpressionValueCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductSearchSuggestionExpressionValueCollection<ProductSearchSuggestionCompletionExpressionValue>
 * @method ProductSearchSuggestionCompletionExpressionValue current()
 * @method ProductSearchSuggestionCompletionExpressionValue end()
 * @method ProductSearchSuggestionCompletionExpressionValue at($offset)
 */
class ProductSearchSuggestionCompletionExpressionValueCollection extends ProductSearchSuggestionExpressionValueCollection
{
    /**
     * @psalm-assert ProductSearchSuggestionCompletionExpressionValue $value
     * @psalm-param ProductSearchSuggestionCompletionExpressionValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchSuggestionCompletionExpressionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchSuggestionCompletionExpressionValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchSuggestionCompletionExpressionValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchSuggestionCompletionExpressionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchSuggestionCompletionExpressionValue $data */
                $data = ProductSearchSuggestionCompletionExpressionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
