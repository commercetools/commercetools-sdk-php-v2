<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AttributeTypeModel extends JsonObjectModel implements AttributeType
{
    public const DISCRIMINATOR_VALUE = '';
    /**

     * @var ?string
     */
    protected $name;

    /**
     * @psalm-var array<string, class-string<AttributeType> >
     *
     */
    private static $discriminatorClasses = [
       'boolean' => AttributeBooleanTypeModel::class,
       'date' => AttributeDateTypeModel::class,
       'datetime' => AttributeDateTimeTypeModel::class,
       'enum' => AttributeEnumTypeModel::class,
       'lenum' => AttributeLocalizedEnumTypeModel::class,
       'ltext' => AttributeLocalizableTextTypeModel::class,
       'money' => AttributeMoneyTypeModel::class,
       'nested' => AttributeNestedTypeModel::class,
       'number' => AttributeNumberTypeModel::class,
       'reference' => AttributeReferenceTypeModel::class,
       'set' => AttributeSetTypeModel::class,
       'text' => AttributeTextTypeModel::class,
       'time' => AttributeTimeTypeModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
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
            $data = $this->raw(self::FIELD_NAME);
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
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = AttributeType::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<AttributeType> */
        $type = AttributeTypeModel::class;
        return $type;
    }
}
