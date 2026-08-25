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
 * @implements Builder<CartDiscountChangeRequiresDiscountCodeAction>
 */
final class CartDiscountChangeRequiresDiscountCodeActionBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $requiresDiscountCode;

    /**
     * <p>New value to set. If <code>true</code>, the Cart Discount can only be used with a <a href="ctp:api:type:DiscountCode">DiscountCode</a>.</p>
     * <p>When set to <code>false</code>, if the number of active Cart Discounts without a Discount Code exceeds the <a href="/api/limits#cart-discounts">limit</a>, a <a href="ctp:api:type:MaxCartDiscountsReachedError">MaxCartDiscountsReached</a> error is returned.</p>
     *

     * @return null|bool
     */
    public function getRequiresDiscountCode()
    {
        return $this->requiresDiscountCode;
    }

    /**
     * @param ?bool $requiresDiscountCode
     * @return $this
     */
    public function withRequiresDiscountCode(?bool $requiresDiscountCode)
    {
        $this->requiresDiscountCode = $requiresDiscountCode;

        return $this;
    }


    public function build(): CartDiscountChangeRequiresDiscountCodeAction
    {
        return new CartDiscountChangeRequiresDiscountCodeActionModel(
            $this->requiresDiscountCode
        );
    }

    public static function of(): CartDiscountChangeRequiresDiscountCodeActionBuilder
    {
        return new self();
    }
}
