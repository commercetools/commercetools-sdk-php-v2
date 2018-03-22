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
        'date' => Types\ProductType\AttributeDateType::class,
        'datetime' => Types\ProductType\AttributeDateTimeType::class,
        'number' => Types\ProductType\AttributeNumberType::class,
        'nested' => Types\ProductType\AttributeNestedType::class,
        'time' => Types\ProductType\AttributeTimeType::class,
        'boolean' => Types\ProductType\AttributeBooleanType::class,
        'lenum' => Types\ProductType\AttributeLocalizedEnumType::class,
        'money' => Types\ProductType\AttributeMoneyType::class,
        'enum' => Types\ProductType\AttributeEnumType::class,
        'text' => Types\ProductType\AttributeTextType::class,
        'set' => Types\ProductType\AttributeSetType::class,
        'ltext' => Types\ProductType\AttributeLocalizableTextType::class,
        'reference' => Types\ProductType\AttributeReferenceType::class,

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
