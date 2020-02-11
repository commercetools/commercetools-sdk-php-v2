<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productdrafts;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\CustomerGroupKeyReference;
use Commercetools\Import\Models\Common\Money;
use DateTimeImmutable;

interface PriceDraftImport extends JsonObject
{

    public const FIELD_VALUE = 'value';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';

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

    public function setValue(?Money $value): void;

    public function setCountry(?string $country): void;

    public function setCustomerGroup(?CustomerGroupKeyReference $customerGroup): void;

    public function setChannel(?ChannelKeyReference $channel): void;

    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    public function setValidUntil(?DateTimeImmutable $validUntil): void;
}
