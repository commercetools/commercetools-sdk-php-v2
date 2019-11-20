<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObjectModel;

final class CentPrecisionMoneyModel extends JsonObjectModel implements CentPrecisionMoney
{
    const DISCRIMINATOR_VALUE = 'centPrecision';

    /**
     * @var ?int
     */
    protected $centAmount;

    /**
     * @var ?int
     */
    protected $fractionDigits;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $currencyCode;

    public function __construct(
        int $centAmount = null,
        int $fractionDigits = null,
        string $currencyCode = null
    ) {
        $this->centAmount = $centAmount;
        $this->fractionDigits = $fractionDigits;
        $this->currencyCode = $currencyCode;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|int
     */
    public function getCentAmount()
    {
        if (is_null($this->centAmount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(TypedMoney::FIELD_CENT_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $this->centAmount = (int) $data;
        }

        return $this->centAmount;
    }

    /**
     * @return null|int
     */
    public function getFractionDigits()
    {
        if (is_null($this->fractionDigits)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(TypedMoney::FIELD_FRACTION_DIGITS);
            if (is_null($data)) {
                return null;
            }
            $this->fractionDigits = (int) $data;
        }

        return $this->fractionDigits;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TypedMoney::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>.
     *
     * @return null|string
     */
    public function getCurrencyCode()
    {
        if (is_null($this->currencyCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TypedMoney::FIELD_CURRENCY_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->currencyCode = (string) $data;
        }

        return $this->currencyCode;
    }

    public function setCentAmount(?int $centAmount): void
    {
        $this->centAmount = $centAmount;
    }

    public function setFractionDigits(?int $fractionDigits): void
    {
        $this->fractionDigits = $fractionDigits;
    }

    public function setCurrencyCode(?string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }
}
