<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class TypedMoneyModel extends JsonObjectModel implements TypedMoney
{
    public const DISCRIMINATOR_VALUE = '';
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
     * @psalm-var array<string, class-string<TypedMoney> >
     *
     */
    private static $discriminatorClasses = [
       'centPrecision' => CentPrecisionMoneyModel::class,
       'highPrecision' => HighPrecisionMoneyModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $centAmount = null,
        ?string $currencyCode = null,
        ?int $fractionDigits = null,
        ?string $type = null
    ) {
        $this->centAmount = $centAmount;
        $this->currencyCode = $currencyCode;
        $this->fractionDigits = $fractionDigits;
        $this->type = $type;
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
     * <p>Currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
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
     * <p>MoneyType supports two different values, one for amounts in cent precision and another one for sub-cent amounts up to 20 fraction digits.</p>
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
     * <p>Number of digits after the decimal separator:</p>
     * <ul>
     * <li>Equal to the default number of fraction digits for a currency in <a href="ctp:api:type:CentPrecisionMoney">CentPrecisionMoney</a>.</li>
     * <li>Greater than the default number of fraction digits for a currency in <a href="ctp:api:type:HighPrecisionMoney">HighPrecisionMoney</a>.</li>
     * </ul>
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

    /**
     * @param ?int $fractionDigits
     */
    public function setFractionDigits(?int $fractionDigits): void
    {
        $this->fractionDigits = $fractionDigits;
    }



    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<TypedMoney>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = TypedMoney::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->$fieldName)) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->$fieldName;
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<TypedMoney> */
        $type = TypedMoneyModel::class;
        return $type;
    }
}
