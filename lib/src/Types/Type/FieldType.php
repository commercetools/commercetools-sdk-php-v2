<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\JsonObject;

use Commercetools\Types;

interface FieldType extends JsonObject
{
    const DISCRIMINATOR = 'name';
    const SUB_TYPES = [
        'Boolean' => Types\Type\CustomFieldBooleanType::class,
        'DateTime' => Types\Type\CustomFieldDateTimeType::class,
        'Date' => Types\Type\CustomFieldDateType::class,
        'Enum' => Types\Type\CustomFieldEnumType::class,
        'LocalizedEnum' => Types\Type\CustomFieldLocalizedEnumType::class,
        'LocalizedString' => Types\Type\CustomFieldLocalizedStringType::class,
        'Money' => Types\Type\CustomFieldMoneyType::class,
        'Number' => Types\Type\CustomFieldNumberType::class,
        'Reference' => Types\Type\CustomFieldReferenceType::class,
        'Set' => Types\Type\CustomFieldSetType::class,
        'String' => Types\Type\CustomFieldStringType::class,
        'Time' => Types\Type\CustomFieldTimeType::class,

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
