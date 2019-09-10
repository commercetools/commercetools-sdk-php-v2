<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\DiscountedPrice;

interface ProductSetDiscountedPriceAction extends ProductUpdateAction
{
    const FIELD_PRICE_ID = 'priceId';
    const FIELD_STAGED = 'staged';
    const FIELD_DISCOUNTED = 'discounted';

    /**
     * @return null|string
     */
    public function getPriceId();

    /**
     * @return null|bool
     */
    public function getStaged();

    /**
     * @return null|DiscountedPrice
     */
    public function getDiscounted();

    public function setPriceId(?string $priceId): void;

    public function setStaged(?bool $staged): void;

    public function setDiscounted(?DiscountedPrice $discounted): void;
}
