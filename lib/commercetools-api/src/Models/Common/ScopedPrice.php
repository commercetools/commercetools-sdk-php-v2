<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\Type\CustomFields;
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
     * @return null|string
     */
    public function getId();

    /**
     * @return null|TypedMoney
     */
    public function getValue();

    /**
     * @return null|TypedMoney
     */
    public function getCurrentValue();

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry();

    /**
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * @return null|ChannelReference
     */
    public function getChannel();

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * @return null|DiscountedPrice
     */
    public function getDiscounted();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    public function setId(?string $id): void;

    public function setValue(?TypedMoney $value): void;

    public function setCurrentValue(?TypedMoney $currentValue): void;

    public function setCountry(?string $country): void;

    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    public function setChannel(?ChannelReference $channel): void;

    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    public function setValidUntil(?DateTimeImmutable $validUntil): void;

    public function setDiscounted(?DiscountedPrice $discounted): void;

    public function setCustom(?CustomFields $custom): void;
}
