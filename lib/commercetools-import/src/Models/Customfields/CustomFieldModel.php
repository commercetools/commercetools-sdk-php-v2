<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class CustomFieldModel extends JsonObjectModel implements CustomField
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @psalm-var array<string, class-string<CustomField> >
     *
     */
    private static $discriminatorClasses = [
       'Boolean' => BooleanFieldModel::class,
       'BooleanSet' => BooleanSetFieldModel::class,
       'Date' => DateFieldModel::class,
       'DateSet' => DateSetFieldModel::class,
       'DateTime' => DateTimeFieldModel::class,
       'DateTimeSet' => DateTimeSetFieldModel::class,
       'Enum' => EnumFieldModel::class,
       'EnumSet' => EnumSetFieldModel::class,
       'LocalizedEnum' => LocalizedEnumFieldModel::class,
       'LocalizedEnumSet' => LocalizedEnumSetFieldModel::class,
       'LocalizedString' => LocalizedStringFieldModel::class,
       'LocalizedStringSet' => LocalizedStringSetFieldModel::class,
       'Money' => MoneyFieldModel::class,
       'MoneySet' => MoneySetFieldModel::class,
       'Number' => NumberFieldModel::class,
       'NumberSet' => NumberSetFieldModel::class,
       'Reference' => ReferenceFieldModel::class,
       'ReferenceSet' => ReferenceSetFieldModel::class,
       'String' => StringFieldModel::class,
       'StringSet' => StringSetFieldModel::class,
       'Time' => TimeFieldModel::class,
       'TimeSet' => TimeSetFieldModel::class,
    ];

    public function __construct(
    ) {
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The type of this field.</p>
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomField::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }




    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<CustomField>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = CustomField::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->$fieldName)) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->$fieldName;
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

        /** @psalm-var class-string<CustomField> */
        $type = CustomFieldModel::class;
        return $type;
    }
}
