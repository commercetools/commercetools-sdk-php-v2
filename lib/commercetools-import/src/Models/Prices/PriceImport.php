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
    public const FIELD_PUBLISH = 'publish';
    public const FIELD_TIERS = 'tiers';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_PRODUCT_VARIANT = 'productVariant';
    public const FIELD_PRODUCT = 'product';

    /**
     * <p>User-defined unique identifier for the Embedded Price.</p>
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
     * <p>The Reference to the <a href="/../api/projects/customerGroups#customergroup">CustomerGroup</a> with which the <a href="/../api/types#embedded-price">Embedded Price</a> is associated.
     * If referenced CustomerGroup does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary CustomerGroup is created.</p>
     *

     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup();

    /**
     * <p>The Reference to the <a href="/../api/projects/channels#channel">Channel</a> with which the <a href="/../api/types#embedded-price">Embedded Price</a> is associated.
     * If referenced Channel does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary Channel is created.</p>
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
     * <p>Only the <a href="/../api/types#embedded-price">Embedded Price</a> updates will be published to <code>staged</code> and <code>current</code> projection.</p>
     *

     * @return null|bool
     */
    public function getPublish();

    /**
     * <p>The tiered prices for this price.</p>
     *

     * @return null|PriceTierCollection
     */
    public function getTiers();

    /**
     * <p>The custom fields for this price.</p>
     *

     * @return null|Custom
     */
    public function getCustom();

    /**
     * <p>The ProductVariant in which this <a href="/../api/types#embedded-price">Embedded Price</a> is contained.
     * The Reference to the <a href="/../api/projects/products#productvariant">ProductVariant</a> with which the <a href="/../api/types#embedded-price">Embedded Price</a> is associated.
     * If referenced ProductVariant does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary ProductVariant is created.</p>
     *

     * @return null|ProductVariantKeyReference
     */
    public function getProductVariant();

    /**
     * <p>The Product in which the Product Variant containing this <a href="/../api/types#embedded-price">Embedded Price</a> is contained. Maps to <code>ProductVariant.product</code>.
     * The Reference to the <a href="/../api/projects/products#product">Product</a> with which the <a href="/../api/types#embedded-price">Embedded Price</a> is associated.
     * If referenced Product does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary Product is created.</p>
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
     * @param ?bool $publish
     */
    public function setPublish(?bool $publish): void;

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
