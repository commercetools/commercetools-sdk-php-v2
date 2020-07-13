<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountCustomLineItemsTarget>
 */
final class CartDiscountCustomLineItemsTargetBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $predicate;

    /**
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


    public function build(): CartDiscountCustomLineItemsTarget
    {
        return new CartDiscountCustomLineItemsTargetModel(
            $this->predicate
        );
    }

    public static function of(): CartDiscountCustomLineItemsTargetBuilder
    {
        return new self();
    }
}
