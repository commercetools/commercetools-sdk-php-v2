<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class TypedMoneyModel extends JsonObjectModel implements TypedMoney
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?int
     */
    protected $fractionDigits;

    /**
     * @var ?int
     */
    protected $centAmount;

    /**
     * @var ?string
     */
    protected $currencyCode;

    /**
     * @psalm-var array<string, class-string<TypedMoney> >
     */
    private static $discriminatorClasses = [
        'centPrecision' => CentPrecisionMoneyModel::class,
        'highPrecision' => HighPrecisionMoneyModel::class,
    ];

    public function __construct(
        int $fractionDigits = null,
        int $centAmount = null,
        string $currencyCode = null
    ) {
        $this->fractionDigits = $fractionDigits;
        $this->centAmount = $centAmount;
        $this->currencyCode = $currencyCode;
        $this->type = static::DISCRIMINATOR_VALUE;
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

    public function setFractionDigits(?int $fractionDigits): void
    {
        $this->fractionDigits = $fractionDigits;
    }

    public function setCentAmount(?int $centAmount): void
    {
        $this->centAmount = $centAmount;
    }

    public function setCurrencyCode(?string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<TypedMoney>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = TypedMoney::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<TypedMoney> */
        $type = TypedMoneyModel::class;

        return $type;
    }
}
