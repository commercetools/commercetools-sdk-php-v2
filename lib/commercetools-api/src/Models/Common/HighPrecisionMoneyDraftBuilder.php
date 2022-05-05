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
 * @implements Builder<HighPrecisionMoneyDraft>
 */
final class HighPrecisionMoneyDraftBuilder implements Builder
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
     * @var ?int
     */
    private $preciseAmount;

    /**
     * <p>Amount in the smallest indivisible unit of a currency. This field is optional for high precision. If provided, it is checked for validity. Example:</p>
     * <p>A Price of 1.015 USD can be rounded either to 1.01 USD or 1.02 USD. If it lies outside of this range, an error message stating that centAmount must be rounded correctly will be returned.</p>
     * <p>If <code>centAmount</code> is not provided, the commercetools Platform calculates the value automatically using the default rounding mode half even.</p>
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
     * <p>Number of fraction digits for a specified high precision money. It must be greater than the default number of fraction digits for the specified currency.</p>
     *
     * @return null|int
     */
    public function getFractionDigits()
    {
        return $this->fractionDigits;
    }

    /**
     * <p>Amount in 1 / (10 ^ <code>fractionDigits</code>) of a currency.</p>
     *
     * @return null|int
     */
    public function getPreciseAmount()
    {
        return $this->preciseAmount;
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

    /**
     * @param ?int $preciseAmount
     * @return $this
     */
    public function withPreciseAmount(?int $preciseAmount)
    {
        $this->preciseAmount = $preciseAmount;

        return $this;
    }


    public function build(): HighPrecisionMoneyDraft
    {
        return new HighPrecisionMoneyDraftModel(
            $this->centAmount,
            $this->currencyCode,
            $this->fractionDigits,
            $this->preciseAmount
        );
    }

    public static function of(): HighPrecisionMoneyDraftBuilder
    {
        return new self();
    }
}
