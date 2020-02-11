<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetDiscountedPriceAction extends ProductUpdateAction
{
    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_STAGED = 'staged';
    public const FIELD_DISCOUNTED = 'discounted';

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
