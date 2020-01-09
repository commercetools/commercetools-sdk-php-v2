<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;

interface TypedMoney extends JsonObject
{
    const DISCRIMINATOR_FIELD = 'type';
    const FIELD_TYPE = 'type';
    const FIELD_FRACTION_DIGITS = 'fractionDigits';
    const FIELD_CENT_AMOUNT = 'centAmount';
    const FIELD_CURRENCY_CODE = 'currencyCode';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|int
     */
    public function getFractionDigits();

    /**
     * @return null|int
     */
    public function getCentAmount();

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     *
     * @return null|string
     */
    public function getCurrencyCode();

    public function setFractionDigits(?int $fractionDigits): void;

    public function setCentAmount(?int $centAmount): void;

    public function setCurrencyCode(?string $currencyCode): void;
}
