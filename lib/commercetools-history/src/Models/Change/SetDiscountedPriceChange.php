<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\DiscountedPrice;
use Commercetools\History\Models\Common\Price;

interface SetDiscountedPriceChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_CATALOG_DATA = 'catalogData';
    public const FIELD_VARIANT = 'variant';
    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_PRICE = 'price';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getNextValue();

    /**
     * <p>Product data that was updated.</p>
     * <ul>
     * <li><code>staged</code>, if the staged <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * <li><code>current</code>, if the current <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getCatalogData();

    /**
     * <p>Identifier of the updated Product Variant.</p>
     * <p>This field holds the SKU, if defined; otherwise the key; otherwise the ID.</p>
     *

     * @return null|string
     */
    public function getVariant();

    /**
     * <p><code>id</code> of the Embedded <a href="ctp:api:type:Price">Price</a>.</p>
     *

     * @return null|string
     */
    public function getPriceId();

    /**
     * <p>Embedded Price of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|Price
     */
    public function getPrice();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?DiscountedPrice $previousValue
     */
    public function setPreviousValue(?DiscountedPrice $previousValue): void;

    /**
     * @param ?DiscountedPrice $nextValue
     */
    public function setNextValue(?DiscountedPrice $nextValue): void;

    /**
     * @param ?string $catalogData
     */
    public function setCatalogData(?string $catalogData): void;

    /**
     * @param ?string $variant
     */
    public function setVariant(?string $variant): void;

    /**
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void;

    /**
     * @param ?Price $price
     */
    public function setPrice(?Price $price): void;
}
