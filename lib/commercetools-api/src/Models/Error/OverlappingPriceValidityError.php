<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface OverlappingPriceValidityError extends ErrorObject
{
    public const FIELD_CONFLICTING_PRICE = 'conflictingPrice';
    public const FIELD_CURRENCY = 'currency';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_CONFLICTING_VALID_FROM = 'conflictingValidFrom';
    public const FIELD_CONFLICTING_VALID_UNTIL = 'conflictingValidUntil';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Two prices have overlapping validity periods.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Unique identifier of the conflicting Embedded Price.</p>
     *

     * @return null|string
     */
    public function getConflictingPrice();

    /**
     * <p>Currency code of the Price.</p>
     *

     * @return null|string
     */
    public function getCurrency();

    /**
     * <p>Country code of the Price.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for which the Price is valid.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    /**
     * <p><a href="ctp:api:type:Channel">Channel</a> for which the Price is valid.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getChannel();

    /**
     * <p>Date and time (UTC) from which the Embedded Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Date and time (UTC) until which the Embedded Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Date and time (UTC) from which the conflicting Embedded Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getConflictingValidFrom();

    /**
     * <p>Date and time (UTC) until which the conflicting Embedded Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getConflictingValidUntil();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?string $conflictingPrice
     */
    public function setConflictingPrice(?string $conflictingPrice): void;

    /**
     * @param ?string $currency
     */
    public function setCurrency(?string $currency): void;

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
     * @param ?DateTimeImmutable $conflictingValidFrom
     */
    public function setConflictingValidFrom(?DateTimeImmutable $conflictingValidFrom): void;

    /**
     * @param ?DateTimeImmutable $conflictingValidUntil
     */
    public function setConflictingValidUntil(?DateTimeImmutable $conflictingValidUntil): void;
}
