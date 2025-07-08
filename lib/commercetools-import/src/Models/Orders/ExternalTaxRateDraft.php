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
     * <p>Used when the total tax is a combination of multiple taxes (for example, local, state/provincial, and/or federal taxes). The total of all subrates must equal the TaxRate <code>amount</code>.
     * These subrates are used to calculate the <code>taxPortions</code> field of a <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a> and the <code>taxedPrice</code> field of <a href="ctp:api:type:LineItem">LineItems</a>, <a href="ctp:api:type:CustomLineItem">CustomLineItems</a>, and <a href="ctp:api:type:ShippingInfo">ShippingInfos</a>.</p>
     *

     * @return null|SubRateCollection
     */
    public function getSubRates();

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
