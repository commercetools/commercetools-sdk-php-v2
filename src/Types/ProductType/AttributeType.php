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
        'enum' => Types\ProductType\AttributeEnumType::class,
        'date' => Types\ProductType\AttributeDateType::class,
        'number' => Types\ProductType\AttributeNumberType::class,
        'nested' => Types\ProductType\AttributeNestedType::class,
        'money' => Types\ProductType\AttributeMoneyType::class,
        'reference' => Types\ProductType\AttributeReferenceType::class,
        'ltext' => Types\ProductType\AttributeLocalizableTextType::class,
        'datetime' => Types\ProductType\AttributeDateTimeType::class,
        'boolean' => Types\ProductType\AttributeBooleanType::class,
        'time' => Types\ProductType\AttributeTimeType::class,
        'text' => Types\ProductType\AttributeTextType::class,
        'lenum' => Types\ProductType\AttributeLocalizedEnumType::class,
        'set' => Types\ProductType\AttributeSetType::class,

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
