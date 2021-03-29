<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface TaxRate extends JsonObject
{

    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';
    public const FIELD_AMOUNT = 'amount';
    public const FIELD_INCLUDED_IN_PRICE = 'includedInPrice';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_STATE = 'state';
    public const FIELD_SUB_RATES = 'subRates';

    /**
     * <p>The ID is always set if the tax rate is part of a TaxCategory. The external tax rates in a Cart do not contain an <code>id</code>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * <p>Percentage in the range of [0..1]. The sum of the amounts of all <code>subRates</code>, if there are any.</p>
     *
     * @return null|int
     */
    public function getAmount();

    /**
     * @return null|bool
     */
    public function getIncludedInPrice();

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
     * @return null|SubRate
     */
    public function getSubRates();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?int $amount
     */
    public function setAmount(?int $amount): void;

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
     * @param ?SubRate $subRates
     */
    public function setSubRates(?SubRate $subRates): void;
}
