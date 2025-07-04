<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MoneyModel extends JsonObjectModel implements Money
{
    public const DISCRIMINATOR_VALUE = 'centPrecision';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?int
     */
    protected $fractionDigits;

    /**
     *
     * @var ?int
     */
    protected $centAmount;

    /**
     *
     * @var ?string
     */
    protected $currencyCode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $fractionDigits = null,
        ?int $centAmount = null,
        ?string $currencyCode = null,
        ?string $type = null
    ) {
        $this->fractionDigits = $fractionDigits;
        $this->centAmount = $centAmount;
        $this->currencyCode = $currencyCode;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The type of money. The <code>centPrecision</code> type is used for currencies with minor units, such as EUR and USD. The <code>highPrecision</code> type is used for currencies without minor units, such as JPY.</p>
     *
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The number of fraction digits of the money value.
     * This is used to determine how many digits are after the decimal point.
     * For example, for EUR and USD, this is <code>2</code>, and for JPY, this is <code>0</code>.</p>
     *
     *
     * @return null|int
     */
    public function getFractionDigits()
    {
        if (is_null($this->fractionDigits)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_FRACTION_DIGITS);
            if (is_null($data)) {
                return null;
            }
            $this->fractionDigits = (int) $data;
        }

        return $this->fractionDigits;
    }

    /**
     * <p>Amount in the smallest indivisible unit of a currency, such as:</p>
     * <ul>
     * <li>Cents for EUR and USD, pence for GBP, or centime for CHF (5 CHF is specified as <code>500</code>).</li>
     * <li>The value in the major unit for currencies without minor units, like JPY (5 JPY is specified as <code>5</code>).</li>
     * </ul>
     *
     *
     * @return null|int
     */
    public function getCentAmount()
    {
        if (is_null($this->centAmount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_CENT_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $this->centAmount = (int) $data;
        }

        return $this->centAmount;
    }

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     *
     *
     * @return null|string
     */
    public function getCurrencyCode()
    {
        if (is_null($this->currencyCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CURRENCY_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->currencyCode = (string) $data;
        }

        return $this->currencyCode;
    }


    /**
     * @param ?int $fractionDigits
     */
    public function setFractionDigits(?int $fractionDigits): void
    {
        $this->fractionDigits = $fractionDigits;
    }

    /**
     * @param ?int $centAmount
     */
    public function setCentAmount(?int $centAmount): void
    {
        $this->centAmount = $centAmount;
    }

    /**
     * @param ?string $currencyCode
     */
    public function setCurrencyCode(?string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }
}
