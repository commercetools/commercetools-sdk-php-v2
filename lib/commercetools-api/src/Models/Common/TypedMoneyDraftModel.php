<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class TypedMoneyDraftModel extends JsonObjectModel implements TypedMoneyDraft
{
    const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?int
     */
    protected $centAmount;

    /**
     * @var ?string
     */
    protected $currencyCode;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @psalm-var array<string, class-string<TypedMoneyDraft> >
     */
    private static $discriminatorClasses = [
        'centPrecision' => CentPrecisionMoneyDraftModel::class,
        'highPrecision' => HighPrecisionMoneyDraftModel::class,
    ];

    public function __construct(
        int $centAmount = null,
        string $currencyCode = null
    ) {
        $this->centAmount = $centAmount;
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
            $data = $this->raw(Money::FIELD_CENT_AMOUNT);
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
     * @return null|string
     */
    public function getCurrencyCode()
    {
        if (is_null($this->currencyCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Money::FIELD_CURRENCY_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->currencyCode = (string) $data;
        }

        return $this->currencyCode;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TypedMoneyDraft::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
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
     * @psalm-return class-string<TypedMoneyDraft>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = TypedMoneyDraft::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<TypedMoneyDraft> */
        $type = TypedMoneyDraftModel::class;

        return $type;
    }
}
