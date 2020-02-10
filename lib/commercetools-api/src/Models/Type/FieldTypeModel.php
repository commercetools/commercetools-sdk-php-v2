<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class FieldTypeModel extends JsonObjectModel implements FieldType
{
    const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $name;

    /**
     * @psalm-var array<string, class-string<FieldType> >
     */
    private static $discriminatorClasses = [
        'LocalizedString' => CustomFieldLocalizedStringTypeModel::class,
        'Set' => CustomFieldSetTypeModel::class,
        'Enum' => CustomFieldEnumTypeModel::class,
        'Date' => CustomFieldDateTypeModel::class,
        'DateTime' => CustomFieldDateTimeTypeModel::class,
        'LocalizedEnum' => CustomFieldLocalizedEnumTypeModel::class,
        'Number' => CustomFieldNumberTypeModel::class,
        'Time' => CustomFieldTimeTypeModel::class,
        'Money' => CustomFieldMoneyTypeModel::class,
        'String' => CustomFieldStringTypeModel::class,
        'Reference' => CustomFieldReferenceTypeModel::class,
        'Boolean' => CustomFieldBooleanTypeModel::class,
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
            $data = $this->raw(FieldType::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<FieldType>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = FieldType::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<FieldType> */
        $type = FieldTypeModel::class;

        return $type;
    }
}
