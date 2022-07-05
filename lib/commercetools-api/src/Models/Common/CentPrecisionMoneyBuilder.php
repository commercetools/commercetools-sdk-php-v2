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
 * @implements Builder<CentPrecisionMoney>
 */
final class CentPrecisionMoneyBuilder implements Builder
{
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
    private $fractionDigits;

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
     * <p>Currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     *

     * @return null|string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * <p>The number of default fraction digits for the given currency, like <code>2</code> for EUR or <code>0</code> for JPY.</p>
     *

     * @return null|int
     */
    public function getFractionDigits()
    {
        return $this->fractionDigits;
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
     * @param ?int $fractionDigits
     * @return $this
     */
    public function withFractionDigits(?int $fractionDigits)
    {
        $this->fractionDigits = $fractionDigits;

        return $this;
    }


    public function build(): CentPrecisionMoney
    {
        return new CentPrecisionMoneyModel(
            $this->centAmount,
            $this->currencyCode,
            $this->fractionDigits
        );
    }

    public static function of(): CentPrecisionMoneyBuilder
    {
        return new self();
    }
}
