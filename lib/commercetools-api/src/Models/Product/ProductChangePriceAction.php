<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\PriceDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductChangePriceAction extends ProductUpdateAction
{
    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_PRICE = 'price';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The <code>id</code> of the Embedded Price to update.</p>
     *

     * @return null|string
     */
    public function getPriceId();

    /**
     * <p>Value to set.</p>
     * <p>If the key of the Price is used by another Embedded Price on the ProductVariant, a <a href="ctp:api:type:DuplicatePriceKeyError">DuplicatePriceKey</a> error is returned.</p>
     * <p>If the new Embedded Price has the same price scope as another Embedded Price on the ProductVariant, a <a href="ctp:api:type:DuplicatePriceScopeError">DuplicatePriceScope</a> error is returned.</p>
     * <p>If the new Embedded Price has overlapping validity periods within the same price scope, an <a href="ctp:api:type:OverlappingPriceValidityError">OverlappingPriceValidity</a> error is returned. An Embedded Price without validity period does not conflict with an Embedded Price defined for a time period.</p>
     *

     * @return null|PriceDraft
     */
    public function getPrice();

    /**
     * <p>Whether only the staged Embedded Price is updated. If <code>false</code>, both the current and staged Embedded Price are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void;

    /**
     * @param ?PriceDraft $price
     */
    public function setPrice(?PriceDraft $price): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
