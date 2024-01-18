<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSearchSuggestionCompletionExpression>
 */
final class ProductSearchSuggestionCompletionExpressionBuilder implements Builder
{
    /**

     * @var null|ProductSearchSuggestionCompletionExpressionValue|ProductSearchSuggestionCompletionExpressionValueBuilder
     */
    private $completion;

    /**

     * @return null|ProductSearchSuggestionCompletionExpressionValue
     */
    public function getCompletion()
    {
        return $this->completion instanceof ProductSearchSuggestionCompletionExpressionValueBuilder ? $this->completion->build() : $this->completion;
    }

    /**
     * @param ?ProductSearchSuggestionCompletionExpressionValue $completion
     * @return $this
     */
    public function withCompletion(?ProductSearchSuggestionCompletionExpressionValue $completion)
    {
        $this->completion = $completion;

        return $this;
    }

    /**
     * @deprecated use withCompletion() instead
     * @return $this
     */
    public function withCompletionBuilder(?ProductSearchSuggestionCompletionExpressionValueBuilder $completion)
    {
        $this->completion = $completion;

        return $this;
    }

    public function build(): ProductSearchSuggestionCompletionExpression
    {
        return new ProductSearchSuggestionCompletionExpressionModel(
            $this->completion instanceof ProductSearchSuggestionCompletionExpressionValueBuilder ? $this->completion->build() : $this->completion
        );
    }

    public static function of(): ProductSearchSuggestionCompletionExpressionBuilder
    {
        return new self();
    }
}
