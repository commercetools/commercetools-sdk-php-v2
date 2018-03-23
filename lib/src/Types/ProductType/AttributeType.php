<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\JsonObject;

use Commercetools\Types;

interface AttributeType extends JsonObject {
    const DISCRIMINATOR = 'name';
    const SUB_TYPES = [
        'datetime' => Types\ProductType\AttributeDateTimeType::class,
        'date' => Types\ProductType\AttributeDateType::class,
        'boolean' => Types\ProductType\AttributeBooleanType::class,
        'money' => Types\ProductType\AttributeMoneyType::class,
        'set' => Types\ProductType\AttributeSetType::class,
        'time' => Types\ProductType\AttributeTimeType::class,
        'enum' => Types\ProductType\AttributeEnumType::class,
        'lenum' => Types\ProductType\AttributeLocalizedEnumType::class,
        'ltext' => Types\ProductType\AttributeLocalizableTextType::class,
        'nested' => Types\ProductType\AttributeNestedType::class,
        'text' => Types\ProductType\AttributeTextType::class,
        'reference' => Types\ProductType\AttributeReferenceType::class,
        'number' => Types\ProductType\AttributeNumberType::class,

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
