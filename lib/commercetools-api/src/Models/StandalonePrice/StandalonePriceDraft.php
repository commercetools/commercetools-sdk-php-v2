<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Common\DiscountedPriceDraft;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\PriceTierDraftCollection;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface StandalonePriceDraft extends JsonObject
{
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
    public const FIELD_RECURRENCE_POLICY = 'recurrencePolicy';
    public const FIELD_STAGED = 'staged';
    public const FIELD_ACTIVE = 'active';

    /**
     * <p>User-defined unique identifier for the StandalonePrice.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Specifies to which <a href="ctp:api:type:ProductVariant">ProductVariant</a> the API associates this Price.
     * It is not validated to exist in product variants.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Sets the money value of this Price.</p>
     * <p>To set the money value in high precision, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a>.</p>
     *

     * @return null|Money
     */
    public function getValue();

    /**
     * <p>Sets the country for which this Price is valid.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Sets the <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for which this Price is valid.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    /**
     * <p>Sets the product distribution <a href="ctp:api:type:Channel">Channel</a> for which this Price is valid.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getChannel();

    /**
     * <p>Sets the date from which the Price is valid. Must be at least 1 ms earlier than <code>validUntil</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Sets the date until the Price is valid. Must be at least 1 ms later than <code>validFrom</code>. Standalone Prices that are no longer valid are not automatically deleted, but they can be <a href="/../api/projects/standalone-prices#delete-standaloneprice">deleted</a> if necessary.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Sets price tiers.</p>
     * <p>If <code>discounted</code> is set, the tiered Price is ignored for a Product Variant.</p>
     *

     * @return null|PriceTierDraftCollection
     */
    public function getTiers();

    /**
     * <p>Sets a discounted price for this Price that is different from the base price with <code>value</code>.</p>
     *

     * @return null|DiscountedPriceDraft
     */
    public function getDiscounted();

    /**
     * <p>Custom Fields for the StandalonePrice.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p><a href="ctp:api:type:RecurrencePolicy">RecurrencePolicy</a> for which this Price is valid.</p>
     *

     * @return null|RecurrencePolicyResourceIdentifier
     */
    public function getRecurrencePolicy();

    /**
     * <p>Staged changes for the StandalonePrice.</p>
     *

     * @return null|StagedPriceDraft
     */
    public function getStaged();

    /**
     * <p>Set to <code>false</code>, if the StandalonePrice should not be considered during <a href="/../api/pricing-and-discounts-overview#product-price-selection">Product price selection</a>.</p>
     *

     * @return null|bool
     */
    public function getActive();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?Money $value
     */
    public function setValue(?Money $value): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void;

    /**
     * @param ?ChannelResourceIdentifier $channel
     */
    public function setChannel(?ChannelResourceIdentifier $channel): void;

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void;

    /**
     * @param ?PriceTierDraftCollection $tiers
     */
    public function setTiers(?PriceTierDraftCollection $tiers): void;

    /**
     * @param ?DiscountedPriceDraft $discounted
     */
    public function setDiscounted(?DiscountedPriceDraft $discounted): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?RecurrencePolicyResourceIdentifier $recurrencePolicy
     */
    public function setRecurrencePolicy(?RecurrencePolicyResourceIdentifier $recurrencePolicy): void;

    /**
     * @param ?StagedPriceDraft $staged
     */
    public function setStaged(?StagedPriceDraft $staged): void;

    /**
     * @param ?bool $active
     */
    public function setActive(?bool $active): void;
}
