<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\StandalonePrice\StandalonePriceReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface OverlappingStandalonePriceValidityError extends ErrorObject
{
    public const FIELD_CONFLICTING_STANDALONE_PRICE = 'conflictingStandalonePrice';
    public const FIELD_SKU = 'sku';
    public const FIELD_CURRENCY = 'currency';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_CONFLICTING_VALID_FROM = 'conflictingValidFrom';
    public const FIELD_CONFLICTING_VALID_UNTIL = 'conflictingValidUntil';

    /**
     * <p><a href="/../api/types#reference">Reference</a> to a <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|StandalonePriceReference
     */
    public function getConflictingStandalonePrice();

    /**

     * @return null|string
     */
    public function getSku();

    /**

     * @return null|string
     */
    public function getCurrency();

    /**

     * @return null|string
     */
    public function getCountry();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:CustomerGroup">CustomerGroup</a>.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

     * @return null|ChannelResourceIdentifier
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

     * @return null|DateTimeImmutable
     */
    public function getConflictingValidFrom();

    /**

     * @return null|DateTimeImmutable
     */
    public function getConflictingValidUntil();

    /**
     * @param ?StandalonePriceReference $conflictingStandalonePrice
     */
    public function setConflictingStandalonePrice(?StandalonePriceReference $conflictingStandalonePrice): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

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
