<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productdrafts;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use DateTimeImmutable;
use Models\Common\ChannelKeyReference;
use Models\Common\CustomerGroupKeyReference;
use Models\Common\DiscountedPrice;
use Models\Common\Money;
use Models\Customfields\Custom;

interface PriceDraftImport extends JsonObject
{

    public const FIELD_VALUE = 'value';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_DISCOUNTED = 'discounted';

    /**
     * @return null|Money
     */
    public function getValue();

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry();

    /**
     * <p>References a customer group by its key.</p>
     *
     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup();

    /**
     * <p>References a channel by its key.</p>
     *
     * @return null|ChannelKeyReference
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
     * <p>The custom fields for this category.</p>
     *
     * @return null|Custom
     */
    public function getCustom();

    /**
     * <p>Sets a discounted price from an external service.</p>
     *
     * @return null|DiscountedPrice
     */
    public function getDiscounted();

    public function setValue(?Money $value): void;

    public function setCountry(?string $country): void;

    public function setCustomerGroup(?CustomerGroupKeyReference $customerGroup): void;

    public function setChannel(?ChannelKeyReference $channel): void;

    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    public function setValidUntil(?DateTimeImmutable $validUntil): void;

    public function setCustom(?Custom $custom): void;

    public function setDiscounted(?DiscountedPrice $discounted): void;
}
