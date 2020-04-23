<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Prices;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

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
     * @return null|string
     */
    public function getId();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|float
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
     * @return null|string
     */
    public function getState();

    /**
     * @return null|SubRateCollection
     */
    public function getSubRates();

    public function setId(?string $id): void;

    public function setName(?string $name): void;

    public function setAmount(?float $amount): void;

    public function setIncludedInPrice(?bool $includedInPrice): void;

    public function setCountry(?string $country): void;

    public function setState(?string $state): void;

    public function setSubRates(?SubRateCollection $subRates): void;
}
