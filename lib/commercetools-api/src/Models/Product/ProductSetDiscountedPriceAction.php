<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\DiscountedPriceDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetDiscountedPriceAction extends ProductUpdateAction
{
    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_STAGED = 'staged';
    public const FIELD_DISCOUNTED = 'discounted';

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:Price">Embedded Price</a> to set the Discount.</p>
     *

     * @return null|string
     */
    public function getPriceId();

    /**
     * <p>If <code>true</code>, only the staged Embedded Price is updated. If <code>false</code>, both the current and staged Embedded Price are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>Value to set. If empty, any existing value will be removed.
     * The referenced <a href="ctp:api:type:ProductDiscount">ProductDiscount</a> must have the Type <code>external</code>, be active, and its predicate must match the referenced Price.</p>
     *

     * @return null|DiscountedPriceDraft
     */
    public function getDiscounted();

    /**
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?DiscountedPriceDraft $discounted
     */
    public function setDiscounted(?DiscountedPriceDraft $discounted): void;
}
