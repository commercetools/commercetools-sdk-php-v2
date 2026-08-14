<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxRateDraft extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_AMOUNT = 'amount';
    public const FIELD_INCLUDED_IN_PRICE = 'includedInPrice';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_STATE = 'state';
    public const FIELD_SUB_RATES = 'subRates';
    public const FIELD_KEY = 'key';

    /**
     * <p>Name of the TaxRate.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Tax rate.</p>
     * <p>Either <code>amount</code> or <code>subRates</code> must be defined. If both are defined, the value of this field must be equal to the sum of the <code>subRates</code> amounts; otherwise, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     *

     * @return null|float
     */
    public function getAmount();

    /**
     * <p>Whether tax is included in <a href="ctp:api:type:Price">Embedded Prices</a> or <a href="ctp:api:type:StandalonePrice">Standalone Prices</a>, and the <code>taxedPrice</code> is present on <a href="ctp:api:type:LineItem">LineItems</a>. In this case, the <code>totalNet</code> price on <a href="ctp:api:type:TaxedPrice">TaxedPrice</a> includes the TaxRate.</p>
     *

     * @return null|bool
     */
    public function getIncludedInPrice();

    /**
     * <p>Country in which the tax rate is applied in <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a> format.</p>
     * <p>If the provided combination of <code>country</code> and <code>state</code> exists for the TaxCategory, a <a href="ctp:api:type:DuplicateFieldError">DuplicateField</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>State within the country, such as Texas in the United States.
     * The value is case-sensitive and must use the same casing as the <code>state</code> value in the Cart <code>shippingAddress</code>. Empty strings are treated as if <code>state</code> was omitted.</p>
     * <p>If the provided combination of <code>country</code> and <code>state</code> exists for the TaxCategory, a <a href="ctp:api:type:DuplicateFieldError">DuplicateField</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getState();

    /**
     * <p>Used when the total tax is a combination of multiple taxes (for example, local, state/provincial, and/or federal taxes). If <code>amount</code> is defined, the total of all subrates must equal <code>amount</code>.
     * These subrates are used to calculate the <code>taxPortions</code> field of a <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a> and the <code>taxedPrice</code> field of <a href="ctp:api:type:LineItem">LineItems</a>, <a href="ctp:api:type:CustomLineItem">CustomLineItems</a>, and <a href="ctp:api:type:ShippingInfo">ShippingInfos</a>.</p>
     *

     * @return null|SubRateCollection
     */
    public function getSubRates();

    /**
     * <p>User-defined identifier of the TaxRate.</p>
     * <p>If the provided key is used by another TaxRate in the TaxCategory, a <a href="ctp:api:type:DuplicateFieldError">DuplicateField</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getKey();

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

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
