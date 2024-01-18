<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchSuggestionCompletionExpression extends ProductSearchSuggestionExpression
{
    public const FIELD_COMPLETION = 'completion';

    /**

     * @return null|ProductSearchSuggestionCompletionExpressionValue
     */
    public function getCompletion();

    /**
     * @param ?ProductSearchSuggestionCompletionExpressionValue $completion
     */
    public function setCompletion(?ProductSearchSuggestionCompletionExpressionValue $completion): void;
}
