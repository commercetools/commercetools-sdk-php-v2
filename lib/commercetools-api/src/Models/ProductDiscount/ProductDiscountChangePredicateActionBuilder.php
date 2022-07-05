<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductDiscountChangePredicateAction>
 */
final class ProductDiscountChangePredicateActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $predicate;

    /**
     * <p>New value to set. Must be a valid <a href="/../api/projects/predicates#productdiscount-predicates">ProductDiscount predicate</a>.</p>
     *

     * @return null|string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * @param ?string $predicate
     * @return $this
     */
    public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;

        return $this;
    }


    public function build(): ProductDiscountChangePredicateAction
    {
        return new ProductDiscountChangePredicateActionModel(
            $this->predicate
        );
    }

    public static function of(): ProductDiscountChangePredicateActionBuilder
    {
        return new self();
    }
}
