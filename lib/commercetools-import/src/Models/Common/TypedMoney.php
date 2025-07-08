<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypedMoney extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_TYPE = 'type';
    public const FIELD_FRACTION_DIGITS = 'fractionDigits';
    public const FIELD_CENT_AMOUNT = 'centAmount';
    public const FIELD_CURRENCY_CODE = 'currencyCode';

    /**
     * <p>The type of money. The <code>centPrecision</code> type is used for currencies with minor units, such as EUR and USD. The <code>highPrecision</code> type is used for currencies without minor units, such as JPY.</p>
     *

     * @return null|string
     */
    public function getType();

    /**
     * <p>The number of fraction digits of the money value.
     * This is used to determine how many digits are after the decimal point.
     * For example, for EUR and USD, this is <code>2</code>, and for JPY, this is <code>0</code>.</p>
     *

     * @return null|int
     */
    public function getFractionDigits();

    /**
     * <p>Amount in the smallest indivisible unit of a currency, such as:</p>
     * <ul>
     * <li>Cents for EUR and USD, pence for GBP, or centime for CHF (5 CHF is specified as <code>500</code>).</li>
     * <li>The value in the major unit for currencies without minor units, like JPY (5 JPY is specified as <code>5</code>).</li>
     * </ul>
     *

     * @return null|int
     */
    public function getCentAmount();

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     *

     * @return null|string
     */
    public function getCurrencyCode();

    /**
     * @param ?int $fractionDigits
     */
    public function setFractionDigits(?int $fractionDigits): void;

    /**
     * @param ?int $centAmount
     */
    public function setCentAmount(?int $centAmount): void;

    /**
     * @param ?string $currencyCode
     */
    public function setCurrencyCode(?string $currencyCode): void;
}
