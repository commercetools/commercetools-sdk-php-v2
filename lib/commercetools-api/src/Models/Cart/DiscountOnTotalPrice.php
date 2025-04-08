<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountOnTotalPrice extends JsonObject
{
    public const FIELD_DISCOUNTED_AMOUNT = 'discountedAmount';
    public const FIELD_INCLUDED_DISCOUNTS = 'includedDiscounts';
    public const FIELD_DISCOUNTED_NET_AMOUNT = 'discountedNetAmount';
    public const FIELD_DISCOUNTED_GROSS_AMOUNT = 'discountedGrossAmount';

    /**
     * <p>Money value of the discount on the total price of the Cart or Order.</p>
     *

     * @return null|TypedMoney
     */
    public function getDiscountedAmount();

    /**
     * <p>Discounts that impact the total price of the Cart or Order.</p>
     *

     * @return null|DiscountedTotalPricePortionCollection
     */
    public function getIncludedDiscounts();

    /**
     * <p>Money value of the discount on the total net price of the Cart or Order.</p>
     * <p>The same percentage of discount applies as on the <code>discountedAmount</code>.
     * Present only when <code>taxedPrice</code> of the Cart or Order exists.</p>
     *

     * @return null|TypedMoney
     */
    public function getDiscountedNetAmount();

    /**
     * <p>Money value of the discount on the total gross price of the Cart or Order.</p>
     * <p>The same percentage of discount applies as on the <code>discountedAmount</code>.
     * Present only when <code>taxedPrice</code> of the Cart or Order exists.</p>
     *

     * @return null|TypedMoney
     */
    public function getDiscountedGrossAmount();

    /**
     * @param ?TypedMoney $discountedAmount
     */
    public function setDiscountedAmount(?TypedMoney $discountedAmount): void;

    /**
     * @param ?DiscountedTotalPricePortionCollection $includedDiscounts
     */
    public function setIncludedDiscounts(?DiscountedTotalPricePortionCollection $includedDiscounts): void;

    /**
     * @param ?TypedMoney $discountedNetAmount
     */
    public function setDiscountedNetAmount(?TypedMoney $discountedNetAmount): void;

    /**
     * @param ?TypedMoney $discountedGrossAmount
     */
    public function setDiscountedGrossAmount(?TypedMoney $discountedGrossAmount): void;
}
