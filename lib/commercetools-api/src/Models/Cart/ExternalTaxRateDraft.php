<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\TaxCategory\SubRateCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ExternalTaxRateDraft extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_AMOUNT = 'amount';
    public const FIELD_INCLUDED_IN_PRICE = 'includedInPrice';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_STATE = 'state';
    public const FIELD_SUB_RATES = 'subRates';

    /**
     * <p>Name of the Tax Rate.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Percentage in the range of 0-1.</p>
     * <ul>
     * <li>If no <code>subRates</code> are specified, a value must be defined.</li>
     * <li>If <code>subRates</code> are specified, this can be omitted or its value must be the sum of all <code>subRates</code> amounts.</li>
     * </ul>
     *

     * @return null|float
     */
    public function getAmount();

    /**
     * <ul>
     * <li>If set to <code>false</code>, the related price is considered the net price and the provided <code>amount</code> is applied to calculate the gross price.</li>
     * <li>If set to <code>true</code>, the related price is considered the gross price, and the provided <code>amount</code> is applied to calculate the net price.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getIncludedInPrice();

    /**
     * <p>Country for which the tax applies.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>State within the specified country.</p>
     *

     * @return null|string
     */
    public function getState();

    /**
     * <p>For countries (such as the US) where the total tax is a combination of multiple taxes (such as state and local taxes). The total of all subrates must equal the TaxRate <code>amount</code>.</p>
     *

     * @return null|SubRateCollection
     */
    public function getSubRates();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?float $amount
     */
    public function setAmount(?float $amount): void;

    /**
     * @param ?bool $includedInPrice
     */
    public function setIncludedInPrice(?bool $includedInPrice): void;

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
}
