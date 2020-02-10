<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class AttributeTypeModel extends JsonObjectModel implements AttributeType
{
    const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $name;

    /**
     * @psalm-var array<string, class-string<AttributeType> >
     */
    private static $discriminatorClasses = [
        'text' => AttributeTextTypeModel::class,
        'number' => AttributeNumberTypeModel::class,
        'datetime' => AttributeDateTimeTypeModel::class,
        'reference' => AttributeReferenceTypeModel::class,
        'ltext' => AttributeLocalizableTextTypeModel::class,
        'set' => AttributeSetTypeModel::class,
        'enum' => AttributeEnumTypeModel::class,
        'date' => AttributeDateTypeModel::class,
        'money' => AttributeMoneyTypeModel::class,
        'time' => AttributeTimeTypeModel::class,
        'boolean' => AttributeBooleanTypeModel::class,
        'lenum' => AttributeLocalizedEnumTypeModel::class,
        'nested' => AttributeNestedTypeModel::class,
    ];

    public function __construct(
    ) {
        $this->name = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AttributeType::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<AttributeType>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = AttributeType::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<AttributeType> */
        $type = AttributeTypeModel::class;

        return $type;
    }
}
