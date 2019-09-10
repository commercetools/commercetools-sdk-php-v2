<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\JsonObject;

interface TaxRateDraft extends JsonObject
{
    const FIELD_NAME = 'name';
    const FIELD_AMOUNT = 'amount';
    const FIELD_INCLUDED_IN_PRICE = 'includedInPrice';
    const FIELD_COUNTRY = 'country';
    const FIELD_STATE = 'state';
    const FIELD_SUB_RATES = 'subRates';

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|int
     */
    public function getAmount();

    /**
     * @return null|bool
     */
    public function getIncludedInPrice();

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>.
     *
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

    public function setName(?string $name): void;

    public function setAmount(?int $amount): void;

    public function setIncludedInPrice(?bool $includedInPrice): void;

    public function setCountry(?string $country): void;

    public function setState(?string $state): void;

    public function setSubRates(?SubRateCollection $subRates): void;
}
