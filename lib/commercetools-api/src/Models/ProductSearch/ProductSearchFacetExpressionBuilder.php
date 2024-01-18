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
 * @implements Builder<ProductSearchFacetExpression>
 */
final class ProductSearchFacetExpressionBuilder implements Builder
{
    public function build(): ProductSearchFacetExpression
    {
        return new ProductSearchFacetExpressionModel(
        );
    }

    public static function of(): ProductSearchFacetExpressionBuilder
    {
        return new self();
    }
}
