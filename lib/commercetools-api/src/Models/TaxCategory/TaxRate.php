<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxRate extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_AMOUNT = 'amount';
    public const FIELD_INCLUDED_IN_PRICE = 'includedInPrice';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_STATE = 'state';
    public const FIELD_SUB_RATES = 'subRates';

    /**
     * <p>Present if the TaxRate is part of a <a href="ctp:api:type:TaxCategory">TaxCategory</a>.
     * Absent for external TaxRates in <a href="ctp:api:type:LineItem">LineItem</a>, <a href="ctp:api:type:CustomLineItem">CustomLineItem</a>, and <a href="ctp:api:type:ShippingInfo">ShippingInfo</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>User-defined unique identifier of the TaxRate.
     * Present when set using <a href="ctp:api:type:TaxRateDraft">TaxRateDraft</a>. Not available for external TaxRates created using <a href="ctp:api:type:ExternalTaxRateDraft">ExternalTaxRateDraft</a>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the TaxRate.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Tax rate. If subrates are used, the amount is the sum of all rates in <code>subRates</code>.</p>
     *

     * @return null|float
     */
    public function getAmount();

    /**
     * <p>If <code>true</code>, tax is included in <a href="ctp:api:type:Price">Embedded Prices</a> or <a href="ctp:api:type:StandalonePrice">Standalone Prices</a>, and the <code>taxedPrice</code> is present on <a href="ctp:api:type:LineItem">LineItems</a>. In this case, the <code>totalNet</code> price on <a href="ctp:api:type:TaxedPrice">TaxedPrice</a> includes the TaxRate.</p>
     *

     * @return null|bool
     */
    public function getIncludedInPrice();

    /**
     * <p>Country in which the tax rate is applied in <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a> format.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>State within the country, such as Texas in the United States.</p>
     *

     * @return null|string
     */
    public function getState();

    /**
     * <p>Used to calculate the <a href="/../api/projects/carts#taxedprice">taxPortions</a> field in a Cart or Order. It is useful if the total tax of a country (such as the US) is a combination of multiple taxes (such as state and local taxes). The total of all subrates equals the TaxRate <code>amount</code>.</p>
     *

     * @return null|SubRateCollection
     */
    public function getSubRates();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

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
