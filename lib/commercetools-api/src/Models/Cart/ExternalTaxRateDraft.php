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
    public const FIELD_COUNTRY = 'country';
    public const FIELD_STATE = 'state';
    public const FIELD_SUB_RATES = 'subRates';
    public const FIELD_INCLUDED_IN_PRICE = 'includedInPrice';

    /**

     * @return null|string
     */
    public function getName();

    /**
     * <p>Percentage in the range of [0..1].
     * Must be supplied if no <code>subRates</code> are specified.
     * If <code>subRates</code> are specified
     * then the <code>amount</code> can be omitted or it must be the sum of the amounts of all <code>subRates</code>.</p>
     *

     * @return null|float
     */
    public function getAmount();

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>The state in the country</p>
     *

     * @return null|string
     */
    public function getState();

    /**
     * <p>For countries (e.g.
     * the US) where the total tax is a combination of multiple taxes (e.g.
     * state and local taxes).</p>
     *

     * @return null|SubRateCollection
     */
    public function getSubRates();

    /**
     * <p>The default value for <code>includedInPrice</code> is FALSE.</p>
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
