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
 * @implements Builder<ProductSearchOrExpression>
 */
final class ProductSearchOrExpressionBuilder implements Builder
{
    /**

     * @var ?ProductSearchQueryCollection
     */
    private $or;

    /**

     * @return null|ProductSearchQueryCollection
     */
    public function getOr()
    {
        return $this->or;
    }

    /**
     * @param ?ProductSearchQueryCollection $or
     * @return $this
     */
    public function withOr(?ProductSearchQueryCollection $or)
    {
        $this->or = $or;

        return $this;
    }


    public function build(): ProductSearchOrExpression
    {
        return new ProductSearchOrExpressionModel(
            $this->or
        );
    }

    public static function of(): ProductSearchOrExpressionBuilder
    {
        return new self();
    }
}
