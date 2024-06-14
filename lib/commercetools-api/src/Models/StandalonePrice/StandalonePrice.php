<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\PriceTierCollection;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface StandalonePrice extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_KEY = 'key';
    public const FIELD_SKU = 'sku';
    public const FIELD_VALUE = 'value';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_TIERS = 'tiers';
    public const FIELD_DISCOUNTED = 'discounted';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_STAGED = 'staged';
    public const FIELD_ACTIVE = 'active';

    /**
     * <p>Unique identifier of the StandalonePrice.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the StandalonePrice.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the StandalonePrice was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the StandalonePrice was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the StandalonePrice.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the StandalonePrice.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>User-defined unique identifier of the StandalonePrice.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>SKU of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> to which this Price is associated.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Money value of this Price.</p>
     *

     * @return null|TypedMoney
     */
    public function getValue();

    /**
     * <p>Country for which this Price is valid.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for which this Price is valid.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * <p>Product distribution <a href="ctp:api:type:Channel">Channel</a> for which this Price is valid.</p>
     *

     * @return null|ChannelReference
     */
    public function getChannel();

    /**
     * <p>Date from which the Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Date until the Price is valid. Standalone Prices that are no longer valid are not automatically deleted, but they can be <a href="/../api/projects/standalone-prices#delete-standaloneprice">deleted</a> if necessary.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Price tiers if any are defined.</p>
     * <p>If <code>discounted</code> is present, the tiered Price is ignored for a Product Variant.</p>
     *

     * @return null|PriceTierCollection
     */
    public function getTiers();

    /**
     * <p>Set if a matching <a href="ctp:api:type:ProductDiscount">ProductDiscount</a> exists. If set, the API uses the <code>discounted</code> value for the <a href="/../api/pricing-and-discounts-overview#line-item-price-selection">Line Item price selection</a>.
     * When a <a href="/../api/projects/productDiscounts#productdiscountvaluerelative">relative discount</a> is applied and the fraction part of the <code>discounted</code> price is 0.5, the discounted price is rounded in favor of the customer with the <a href="https://en.wikipedia.org/wiki/Rounding#Round_half_down">half down rounding</a>.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getDiscounted();

    /**
     * <p>Custom Fields for the StandalonePrice.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Staged changes of the StandalonePrice. Only present if the StandalonePrice has some changes staged.</p>
     *

     * @return null|StagedStandalonePrice
     */
    public function getStaged();

    /**
     * <p>If set to <code>true</code>, the StandalonePrice is considered during <a href="/../api/pricing-and-discounts-overview#product-price-selection">Product price selection</a>.
     * If set to <code>false</code>, the StandalonePrice is not considered during <a href="/../api/pricing-and-discounts-overview#product-price-selection">Product price selection</a> and any associated Line Items in a Cart cannot be ordered.</p>
     *

     * @return null|bool
     */
    public function getActive();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?TypedMoney $value
     */
    public function setValue(?TypedMoney $value): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?CustomerGroupReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    /**
     * @param ?ChannelReference $channel
     */
    public function setChannel(?ChannelReference $channel): void;

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void;

    /**
     * @param ?PriceTierCollection $tiers
     */
    public function setTiers(?PriceTierCollection $tiers): void;

    /**
     * @param ?DiscountedPrice $discounted
     */
    public function setDiscounted(?DiscountedPrice $discounted): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?StagedStandalonePrice $staged
     */
    public function setStaged(?StagedStandalonePrice $staged): void;

    /**
     * @param ?bool $active
     */
    public function setActive(?bool $active): void;
}
