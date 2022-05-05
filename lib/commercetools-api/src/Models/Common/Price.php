<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Price extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VALUE = 'value';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_DISCOUNTED = 'discounted';
    public const FIELD_TIERS = 'tiers';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Platform-generated unique identifier of this Price.</p>
     *
     * @return null|string
     */
    public function getId();

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
     * <p><code>ProductDistribution</code> <a href="ctp:api:type:Channel">Channel</a> for which this Price is valid.</p>
     *
     * @return null|ChannelReference
     */
    public function getChannel();

    /**
     * <p>Date and time from which this Price is valid.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Date and time until this Price is valid.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Is set if a <a href="ctp:api:type:ProductDiscount">ProductDiscount</a> has been applied.
     * If set, the commercetools Platform uses the DiscountedPrice value for the <a href="/projects/carts#lineitem-price-selection">LineItem Price selection</a>.
     * When a <a href="/../api/projects/productDiscounts#relative">relative discount</a> has been applied and the fraction part of the DiscountedPrice <code>value</code> is 0.5, the <code>value</code> is rounded in favor of the customer with <a href="https://en.wikipedia.org/wiki/Rounding#Round_half_down">half down rounding</a>.</p>
     *
     * @return null|DiscountedPrice
     */
    public function getDiscounted();

    /**
     * <p>Present if different Prices for certain <a href="ctp:api:type:LineItem">LineItem</a> quantities have been specified.</p>
     *
     * @return null|PriceTierCollection
     */
    public function getTiers();

    /**
     * <p>Custom Fields defined for the Price.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

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
     * @param ?DiscountedPrice $discounted
     */
    public function setDiscounted(?DiscountedPrice $discounted): void;

    /**
     * @param ?PriceTierCollection $tiers
     */
    public function setTiers(?PriceTierCollection $tiers): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
