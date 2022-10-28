<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Prices\SubRateCollection;

interface ExternalTaxRateDraft extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_AMOUNT = 'amount';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_STATE = 'state';
    public const FIELD_SUB_RATES = 'subRates';
    public const FIELD_INCLUDED_IN_PRICE = 'includedInPrice';

    /**

     * @return null|string
     */
    public function getName();

    /**

     * @return null|float
     */
    public function getAmount();

    /**

     * @return null|string
     */
    public function getCountry();

    /**

     * @return null|string
     */
    public function getState();

    /**

     * @return null|SubRateCollection
     */
    public function getSubRates();

    /**

     * @return null|bool
     */
    public function getIncludedInPrice();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?float $amount
     */
    public function setAmount(?float $amount): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;

    /**
     * @param ?SubRateCollection $subRates
     */
    public function setSubRates(?SubRateCollection $subRates): void;

    /**
     * @param ?bool $includedInPrice
     */
    public function setIncludedInPrice(?bool $includedInPrice): void;
}
