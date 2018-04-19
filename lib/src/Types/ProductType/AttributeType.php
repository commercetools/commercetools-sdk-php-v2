<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\JsonObject;

use Commercetools\Types;

interface AttributeType extends JsonObject
{
    const DISCRIMINATOR = 'name';
    const SUB_TYPES = [
        'boolean' => Types\ProductType\AttributeBooleanType::class,
        'datetime' => Types\ProductType\AttributeDateTimeType::class,
        'date' => Types\ProductType\AttributeDateType::class,
        'enum' => Types\ProductType\AttributeEnumType::class,
        'ltext' => Types\ProductType\AttributeLocalizableTextType::class,
        'lenum' => Types\ProductType\AttributeLocalizedEnumType::class,
        'money' => Types\ProductType\AttributeMoneyType::class,
        'nested' => Types\ProductType\AttributeNestedType::class,
        'number' => Types\ProductType\AttributeNumberType::class,
        'reference' => Types\ProductType\AttributeReferenceType::class,
        'set' => Types\ProductType\AttributeSetType::class,
        'text' => Types\ProductType\AttributeTextType::class,
        'time' => Types\ProductType\AttributeTimeType::class,

    ];

    const FIELD_NAME = 'name';

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

}
