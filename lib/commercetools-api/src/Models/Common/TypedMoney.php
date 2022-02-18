<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypedMoney extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_TYPE = 'type';
    public const FIELD_CURRENCY_CODE = 'currencyCode';
    public const FIELD_CENT_AMOUNT = 'centAmount';
    public const FIELD_FRACTION_DIGITS = 'fractionDigits';

    /**
     * <p>The platform supports two different types of Money, one for amounts in cent precision and another one for sub-cent amounts up to 12 fraction digits.</p>
     *
     * @return null|string
     */
    public function getType();

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     *
     * @return null|string
     */
    public function getCurrencyCode();

    /**
     * <p>amount in the smallest indivisible unit of a currency, such as</p>
     * <ul>
     * <li>cents for EUR and USD, pence for GBP, or centime for CHF (5 CHF is specified as 500).</li>
     * <li>the value in the major unit for currencies without minor units, like JPY (5 JPY is specified as 5).</li>
     * </ul>
     *
     * @return null|int
     */
    public function getCentAmount();

    /**
     * <p>number of digits after the decimal separator</p>
     * <ul>
     * <li>equal to the default number of fraction digits for a currency in <a href="ctp:api:type:CentPrecisionMoney">CentPrecisionMoney</a>.</li>
     * <li>greater than the default number of fraction digits for a currency in <a href="ctp:api:type:HighPrecisionMoney">HighPrecisionMoney</a>.</li>
     * </ul>
     *
     * @return null|int
     */
    public function getFractionDigits();

    /**
     * @param ?string $currencyCode
     */
    public function setCurrencyCode(?string $currencyCode): void;

    /**
     * @param ?int $centAmount
     */
    public function setCentAmount(?int $centAmount): void;

    /**
     * @param ?int $fractionDigits
     */
    public function setFractionDigits(?int $fractionDigits): void;
}
