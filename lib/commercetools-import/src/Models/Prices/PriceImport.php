<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Prices;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\CustomerGroupKeyReference;
use Commercetools\Import\Models\Common\DiscountedPrice;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\PriceTierCollection;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductVariantKeyReference;
use Commercetools\Import\Models\Common\TypedMoney;
use Commercetools\Import\Models\Customfields\Custom;
use DateTimeImmutable;

interface PriceImport extends ImportResource
{
    public const FIELD_VALUE = 'value';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_DISCOUNTED = 'discounted';
    public const FIELD_STAGED = 'staged';
    public const FIELD_TIERS = 'tiers';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_PRODUCT_VARIANT = 'productVariant';
    public const FIELD_PRODUCT = 'product';

    /**
     * <p>User-defined unique identifier for the Embedded Price. If a <a href="/../api/types#price">Price</a> with this <code>key</code> exists on the specified <code>productVariant</code>, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Maps to <code>Price.value</code>.</p>
     *

     * @return null|TypedMoney
     */
    public function getValue();

    /**
     * <p>Maps to <code>Price.county</code>.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Maps to <code>Price.validFrom</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Maps to <code>Price.validUntil</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Maps to <code>Price.customerGroup</code>. If the referenced <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced CustomerGroup is created.</p>
     *

     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup();

    /**
     * <p>Maps to <code>Price.channel</code>. If the referenced <a href="ctp:api:type:Channel">Channel</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Channel is created.</p>
     *

     * @return null|ChannelKeyReference
     */
    public function getChannel();

    /**
     * <p>Sets a discounted price from an external service.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getDiscounted();

    /**
     * <ul>
     * <li>Set to <code>false</code> to update both the <a href="/../api/projects/productProjections#current--staged">current and staged projections</a> of the <a href="ctp:api:type:Product">Product</a> with the new Price data.</li>
     * <li>Leave empty or set to <code>true</code> to only update the staged projection.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>The tiered prices for this price.</p>
     *

     * @return null|PriceTierCollection
     */
    public function getTiers();

    /**
     * <p>Maps to <code>Price.custom</code>.</p>
     *

     * @return null|Custom
     */
    public function getCustom();

    /**
     * <p>The <a href="ctp:api:type:ProductVariant">ProductVariant</a> which contains this Embedded Price. If the referenced ProductVariant does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced ProductVariant is created.</p>
     *

     * @return null|ProductVariantKeyReference
     */
    public function getProductVariant();

    /**
     * <p>The <a href="ctp:api:type:Product">Product</a> which contains the <code>productVariant</code>. If the referenced Product does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Product is created.</p>
     *

     * @return null|ProductKeyReference
     */
    public function getProduct();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?TypedMoney $value
     */
    public function setValue(?TypedMoney $value): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void;

    /**
     * @param ?CustomerGroupKeyReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupKeyReference $customerGroup): void;

    /**
     * @param ?ChannelKeyReference $channel
     */
    public function setChannel(?ChannelKeyReference $channel): void;

    /**
     * @param ?DiscountedPrice $discounted
     */
    public function setDiscounted(?DiscountedPrice $discounted): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?PriceTierCollection $tiers
     */
    public function setTiers(?PriceTierCollection $tiers): void;

    /**
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void;

    /**
     * @param ?ProductVariantKeyReference $productVariant
     */
    public function setProductVariant(?ProductVariantKeyReference $productVariant): void;

    /**
     * @param ?ProductKeyReference $product
     */
    public function setProduct(?ProductKeyReference $product): void;
}
