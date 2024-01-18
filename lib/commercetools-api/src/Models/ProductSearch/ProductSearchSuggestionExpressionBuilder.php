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
 * @implements Builder<ProductSearchSuggestionExpression>
 */
final class ProductSearchSuggestionExpressionBuilder implements Builder
{
    public function build(): ProductSearchSuggestionExpression
    {
        return new ProductSearchSuggestionExpressionModel(
        );
    }

    public static function of(): ProductSearchSuggestionExpressionBuilder
    {
        return new self();
    }
}
