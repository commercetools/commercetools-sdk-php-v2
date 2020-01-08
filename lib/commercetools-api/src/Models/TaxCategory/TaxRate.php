<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\JsonObject;

interface TaxRate extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_NAME = 'name';
    const FIELD_AMOUNT = 'amount';
    const FIELD_INCLUDED_IN_PRICE = 'includedInPrice';
    const FIELD_COUNTRY = 'country';
    const FIELD_STATE = 'state';
    const FIELD_SUB_RATES = 'subRates';

    /**
     * <p>The ID is always set if the tax rate is part of a TaxCategory.
     * The external tax rates in a
     * Cart do not contain an <code>id</code>.</p>.
     *
     * @return null|string
     */
    public function getId();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * <p>Percentage in the range of [0..1].
     * The sum of the amounts of all <code>subRates</code>, if there are any.</p>.
     *
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
     * <p>The state in the country</p>.
     *
     * @return null|string
     */
    public function getState();

    /**
     * <p>For countries (e.g.
     * the US) where the total tax is a combination of multiple taxes (e.g.
     * state and local taxes).</p>.
     *
     * @return null|SubRateCollection
     */
    public function getSubRates();

    public function setId(?string $id): void;

    public function setName(?string $name): void;

    public function setAmount(?int $amount): void;

    public function setIncludedInPrice(?bool $includedInPrice): void;

    public function setCountry(?string $country): void;

    public function setState(?string $state): void;

    public function setSubRates(?SubRateCollection $subRates): void;
}
