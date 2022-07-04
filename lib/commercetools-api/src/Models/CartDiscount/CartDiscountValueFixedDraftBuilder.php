<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\MoneyCollection;
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
     * @var ?MoneyCollection
     */
    private $money;

    /**
     * <p>Money values in different currencies.
     * A fixed Cart Discount will only match a price if this array contains a value with the same currency. If it contains 10��� and 15$, the matching ��� price will be discounted by 10��� and the matching $ price will be discounted to 15$.</p>
     *
     * @return null|MoneyCollection
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param ?MoneyCollection $money
     * @return $this
     */
    public function withMoney(?MoneyCollection $money)
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
