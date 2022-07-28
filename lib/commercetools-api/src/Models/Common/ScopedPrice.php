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

interface ScopedPrice extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VALUE = 'value';
    public const FIELD_CURRENT_VALUE = 'currentValue';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_DISCOUNTED = 'discounted';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Platform-generated unique identifier of the Price.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Original value of the Price.</p>
     *

     * @return null|TypedMoney
     */
    public function getValue();

    /**
     * <p>If available, either the original price <code>value</code> or <code>discounted</code> value.</p>
     *

     * @return null|TypedMoney
     */
    public function getCurrentValue();

    /**
     * <p>Country code of the geographic location.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Reference to a CustomerGroup.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * <p>Reference to a Channel.</p>
     *

     * @return null|ChannelReference
     */
    public function getChannel();

    /**
     * <p>Date and time from which the Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Date and time until which the Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Is set if a matching <a href="ctp:api:type:ProductDiscount">ProductDiscount</a> exists. If set, the <a href="ctp:api:type:Cart">Cart</a> uses the discounted value for the <a href="ctp:api:type:CartAddLineItem">Cart Price calculation</a>.</p>
     * <p>When a <a href="ctp:api:type:ProductDiscountValueRelative">relative Product Discount</a> is applied and the fractional part of the discounted Price is 0.5, the discounted Price is <a href="https://en.wikipedia.org/wiki/Rounding#Round_half_down">rounded half down</a> in favor of the Customer.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getDiscounted();

    /**
     * <p>Custom Fields for the Price.</p>
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
     * @param ?TypedMoney $currentValue
     */
    public function setCurrentValue(?TypedMoney $currentValue): void;

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
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
