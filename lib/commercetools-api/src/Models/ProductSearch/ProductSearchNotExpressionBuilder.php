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
 * @implements Builder<ProductSearchNotExpression>
 */
final class ProductSearchNotExpressionBuilder implements Builder
{
    /**

     * @var ?ProductSearchQueryCollection
     */
    private $not;

    /**

     * @return null|ProductSearchQueryCollection
     */
    public function getNot()
    {
        return $this->not;
    }

    /**
     * @param ?ProductSearchQueryCollection $not
     * @return $this
     */
    public function withNot(?ProductSearchQueryCollection $not)
    {
        $this->not = $not;

        return $this;
    }


    public function build(): ProductSearchNotExpression
    {
        return new ProductSearchNotExpressionModel(
            $this->not
        );
    }

    public static function of(): ProductSearchNotExpressionBuilder
    {
        return new self();
    }
}
