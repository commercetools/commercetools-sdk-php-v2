<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\TaxCategory\SubRateCollection;
use Commercetools\Base\JsonObject;

interface ExternalTaxRateDraft extends JsonObject
{
    const FIELD_NAME = 'name';
    const FIELD_AMOUNT = 'amount';
    const FIELD_COUNTRY = 'country';
    const FIELD_STATE = 'state';
    const FIELD_SUB_RATES = 'subRates';
    const FIELD_INCLUDED_IN_PRICE = 'includedInPrice';

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|int
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

    public function setName(?string $name): void;

    public function setAmount(?int $amount): void;

    public function setCountry(?string $country): void;

    public function setState(?string $state): void;

    public function setSubRates(?SubRateCollection $subRates): void;

    public function setIncludedInPrice(?bool $includedInPrice): void;
}
