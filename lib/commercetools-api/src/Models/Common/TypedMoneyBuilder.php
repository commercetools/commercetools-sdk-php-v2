<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TypedMoney>
 */
final class TypedMoneyBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $currencyCode;

    /**
     * @var ?int
     */
    private $centAmount;

    /**
     * @var ?int
     */
    private $fractionDigits;

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
     * <p>amount in the smallest indivisible unit of a currency, such as</p>
     * <ul>
     * <li>cents for EUR and USD, pence for GBP, or centime for CHF (5 CHF is specified as 500).</li>
     * <li>the value in the major unit for currencies without minor units, like JPY (5 JPY is specified as 5).</li>
     * </ul>
     *
     * @return null|int
     */
    public function getCentAmount()
    {
        return $this->centAmount;
    }

    /**
     * <p>number of digits after the decimal separator</p>
     * <ul>
     * <li>equal to the default number of fraction digits for a currency in <a href="ctp:api:type:CentPrecisionMoney">CentPrecisionMoney</a>.</li>
     * <li>greater than the default number of fraction digits for a currency in <a href="ctp:api:type:HighPrecisionMoney">HighPrecisionMoney</a>.</li>
     * </ul>
     *
     * @return null|int
     */
    public function getFractionDigits()
    {
        return $this->fractionDigits;
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
     * @param ?int $centAmount
     * @return $this
     */
    public function withCentAmount(?int $centAmount)
    {
        $this->centAmount = $centAmount;

        return $this;
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


    public function build(): TypedMoney
    {
        return new TypedMoneyModel(
            $this->currencyCode,
            $this->centAmount,
            $this->fractionDigits
        );
    }

    public static function of(): TypedMoneyBuilder
    {
        return new self();
    }
}
