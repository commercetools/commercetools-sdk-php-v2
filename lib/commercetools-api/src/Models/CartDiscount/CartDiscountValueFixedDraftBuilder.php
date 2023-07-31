<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\TypedMoneyDraftCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountValueFixedDraft>
 */
final class CartDiscountValueFixedDraftBuilder implements Builder
{
    /**

     * @var ?TypedMoneyDraftCollection
     */
    private $money;

    /**
     * <p>Money values provided either in <a href="ctp:api:type:Money">cent precision</a> or <a href="ctp:api:type:HighPrecisionMoneyDraft">high precision</a> for different currencies.
     * A fixed Cart Discount will only match a price if this array contains a value with the same currency. If it contains 10€ and 15$, the matching € price will be discounted by 10€ and the matching $ price will be discounted to 15$.</p>
     *

     * @return null|TypedMoneyDraftCollection
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param ?TypedMoneyDraftCollection $money
     * @return $this
     */
    public function withMoney(?TypedMoneyDraftCollection $money)
    {
        $this->money = $money;

        return $this;
    }


    public function build(): CartDiscountValueFixedDraft
    {
        return new CartDiscountValueFixedDraftModel(
            $this->money
        );
    }

    public static function of(): CartDiscountValueFixedDraftBuilder
    {
        return new self();
    }
}
