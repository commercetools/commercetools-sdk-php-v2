<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TypedMoney>
 */
final class TypedMoneyBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $centAmount;

    /**
     * @var ?int
     */
    private $fractionDigits;

    /**
     * @var ?string
     */
    private $currencyCode;

    /**
     * @return null|int
     */
    public function getCentAmount()
    {
        return $this->centAmount;
    }

    /**
     * @return null|int
     */
    public function getFractionDigits()
    {
        return $this->fractionDigits;
    }

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>.
     *
     * @return null|string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @return $this
     */
    public function withCentAmount(?int $centAmount)
    {
        $this->centAmount = $centAmount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFractionDigits(?int $fractionDigits)
    {
        $this->fractionDigits = $fractionDigits;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCurrencyCode(?string $currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    public function build(): TypedMoney
    {
        return new TypedMoneyModel(
            $this->centAmount,
            $this->fractionDigits,
            $this->currencyCode
        );
    }

    public static function of(): TypedMoneyBuilder
    {
        return new self();
    }
}
