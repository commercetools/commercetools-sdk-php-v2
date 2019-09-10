<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountCustomLineItemsTarget>
 */
final class CartDiscountCustomLineItemsTargetBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?string
     */
    private $predicate;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
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
            $this->type,
            $this->predicate
        );
    }

    public static function of(): CartDiscountCustomLineItemsTargetBuilder
    {
        return new self();
    }
}
