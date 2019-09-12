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
        'any' => AnyAttributeModel::class,
        'boolean' => BooleanAttributeModel::class,
        'date' => DateAttributeModel::class,
        'datetime' => DateTimeAttributeModel::class,
        'enum' => EnumAttributeModel::class,
        'lenum' => LocalizableEnumAttributeModel::class,
        'ltext' => LocalizableTextAttributeModel::class,
        'money' => MoneyAttributeModel::class,
        'number' => NumberAttributeModel::class,
        'text' => TextAttributeModel::class,
        'time' => TimeAttributeModel::class,
    ];

    public function __construct(
        string $name = null,
        string $type = null
    ) {
        $this->name = $name;
        $this->type = $type;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>For now we reuse this type in two different context. And that's why the name is required when used in the full import.
     * And why the name isn't required when used in patch.</p>.
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

    public function setType(?string $type): void
    {
        $this->type = $type;
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
            /** @var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @var string $discriminatorValue */
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
