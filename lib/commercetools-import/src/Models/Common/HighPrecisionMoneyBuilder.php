<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<HighPrecisionMoney>
 */
final class HighPrecisionMoneyBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $fractionDigits;

    /**

     * @var ?int
     */
    private $centAmount;

    /**

     * @var ?string
     */
    private $currencyCode;

    /**

     * @var ?int
     */
    private $preciseAmount;

    /**
     * <p>The number of fraction digits of the money value.
     * This is used to determine how many digits are after the decimal point.
     * For example, for EUR and USD, this is <code>2</code>, and for JPY, this is <code>0</code>.</p>
     *

     * @return null|int
     */
    public function getFractionDigits()
    {
        return $this->fractionDigits;
    }

    /**
     * <p>Amount in the smallest indivisible unit of a currency, such as:</p>
     * <ul>
     * <li>Cents for EUR and USD, pence for GBP, or centime for CHF (5 CHF is specified as <code>500</code>).</li>
     * <li>The value in the major unit for currencies without minor units, like JPY (5 JPY is specified as <code>5</code>).</li>
     * </ul>
     *

     * @return null|int
     */
    public function getCentAmount()
    {
        return $this->centAmount;
    }

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     *

     * @return null|string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**

     * @return null|int
     */
    public function getPreciseAmount()
    {
        return $this->preciseAmount;
    }

    /**
     * @param ?int $fractionDigits
     * @return $this
     */
    public function withFractionDigits(?int $fractionDigits)
    {
        $this->fractionDigits = $fractionDigits;

        return $this;
    }

    /**
     * @param ?int $centAmount
     * @return $this
     */
    public function withCentAmount(?int $centAmount)
    {
        $this->centAmount = $centAmount;

        return $this;
    }

    /**
     * @param ?string $currencyCode
     * @return $this
     */
    public function withCurrencyCode(?string $currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @param ?int $preciseAmount
     * @return $this
     */
    public function withPreciseAmount(?int $preciseAmount)
    {
        $this->preciseAmount = $preciseAmount;

        return $this;
    }


    public function build(): HighPrecisionMoney
    {
        return new HighPrecisionMoneyModel(
            $this->fractionDigits,
            $this->centAmount,
            $this->currencyCode,
            $this->preciseAmount
        );
    }

    public static function of(): HighPrecisionMoneyBuilder
    {
        return new self();
    }
}
