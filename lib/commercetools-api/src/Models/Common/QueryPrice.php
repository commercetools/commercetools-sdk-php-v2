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

interface QueryPrice extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VALUE = 'value';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_DISCOUNTED = 'discounted';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_TIERS = 'tiers';

    /**
     * <p>Platform-generated unique identifier of the given Price.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>Money value of the given Price.</p>
     *
     * @return null|Money
     */
    public function getValue();

    /**
     * <p>Country for which the given Price is valid.</p>
     *
     * @return null|string
     */
    public function getCountry();

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for which the given Price is valid.</p>
     *
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * <p><code>ProductDistribution</code> <a href="ctp:api:type:Channel">Channel</a> for which the given Price is valid.</p>
     *
     * @return null|ChannelReference
     */
    public function getChannel();

    /**
     * <p>Date from which the given Price is valid.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Date until which the given Price is valid.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p><a href="ctp:api:type:DiscountedPrice">DiscountedPrice</a> you specify for the given Price.</p>
     *
     * @return null|DiscountedPriceDraft
     */
    public function getDiscounted();

    /**
     * <p>Custom Fields for the Price.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Price tier applied when the minimum quantity for the <a href="ctp:api:type:LineItem">LineItem</a> of a ProductVariant with the related Price is reached in a Cart.</p>
     *
     * @return null|PriceTierDraftCollection
     */
    public function getTiers();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?Money $value
     */
    public function setValue(?Money $value): void;

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
     * @param ?DiscountedPriceDraft $discounted
     */
    public function setDiscounted(?DiscountedPriceDraft $discounted): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?PriceTierDraftCollection $tiers
     */
    public function setTiers(?PriceTierDraftCollection $tiers): void;
}
