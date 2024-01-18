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
 * @implements Builder<ProductSearchAndExpression>
 */
final class ProductSearchAndExpressionBuilder implements Builder
{
    /**

     * @var ?ProductSearchQueryCollection
     */
    private $and;

    /**

     * @return null|ProductSearchQueryCollection
     */
    public function getAnd()
    {
        return $this->and;
    }

    /**
     * @param ?ProductSearchQueryCollection $and
     * @return $this
     */
    public function withAnd(?ProductSearchQueryCollection $and)
    {
        $this->and = $and;

        return $this;
    }


    public function build(): ProductSearchAndExpression
    {
        return new ProductSearchAndExpressionModel(
            $this->and
        );
    }

    public static function of(): ProductSearchAndExpressionBuilder
    {
        return new self();
    }
}
