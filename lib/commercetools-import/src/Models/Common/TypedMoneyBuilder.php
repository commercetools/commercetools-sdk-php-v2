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
 * @implements Builder<TypedMoney>
 */
final class TypedMoneyBuilder implements Builder
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

     * @return null|int
     */
    public function getFractionDigits()
    {
        return $this->fractionDigits;
    }

    /**

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


    public function build(): TypedMoney
    {
        return new TypedMoneyModel(
            $this->fractionDigits,
            $this->centAmount,
            $this->currencyCode
        );
    }

    public static function of(): TypedMoneyBuilder
    {
        return new self();
    }
}
