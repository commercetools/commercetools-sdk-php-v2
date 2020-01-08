<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class AttributeModel extends JsonObjectModel implements Attribute
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @psalm-var array<string, class-string<Attribute> >
     */
    private static $discriminatorClasses = [
        'boolean' => BooleanAttributeModel::class,
        'boolean-set' => BooleanSetAttributeModel::class,
        'date' => DateAttributeModel::class,
        'date-set' => DateSetAttributeModel::class,
        'datetime' => DateTimeAttributeModel::class,
        'datetime-set' => DateTimeSetAttributeModel::class,
        'enum' => EnumAttributeModel::class,
        'enum-set' => EnumSetAttributeModel::class,
        'lenum' => LocalizableEnumAttributeModel::class,
        'lenum-set' => LocalizableEnumSetAttributeModel::class,
        'ltext' => LocalizableTextAttributeModel::class,
        'ltext-set' => LocalizableTextSetAttributeModel::class,
        'money' => MoneyAttributeModel::class,
        'money-set' => MoneySetAttributeModel::class,
        'number' => NumberAttributeModel::class,
        'number-set' => NumberSetAttributeModel::class,
        'reference' => ReferenceAttributeModel::class,
        'reference-set' => ReferenceSetAttributeModel::class,
        'text' => TextAttributeModel::class,
        'text-set' => TextSetAttributeModel::class,
        'time' => TimeAttributeModel::class,
        'time-set' => TimeSetAttributeModel::class,
    ];

    public function __construct(
        string $name = null
    ) {
        $this->name = $name;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The name of this attribute must match a name of the product types attribute definitions.
     * The name is required if this type is used in a product variant and must not be set when
     * used in a product variant patch.</p>.
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Attribute::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Attribute::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<Attribute>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = Attribute::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<Attribute> */
        $type = AttributeModel::class;

        return $type;
    }
}
