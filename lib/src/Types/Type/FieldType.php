<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\JsonObject;

use Commercetools\Types;

interface FieldType extends JsonObject {
    const DISCRIMINATOR = 'name';
    const SUB_TYPES = [
        'Set' => Types\Type\CustomFieldSetType::class,
        'Money' => Types\Type\CustomFieldMoneyType::class,
        'LocalizedEnum' => Types\Type\CustomFieldLocalizedEnumType::class,
        'LocalizedString' => Types\Type\CustomFieldLocalizedStringType::class,
        'Time' => Types\Type\CustomFieldTimeType::class,
        'Reference' => Types\Type\CustomFieldReferenceType::class,
        'Enum' => Types\Type\CustomFieldEnumType::class,
        'Boolean' => Types\Type\CustomFieldBooleanType::class,
        'String' => Types\Type\CustomFieldStringType::class,
        'Date' => Types\Type\CustomFieldDateType::class,
        'DateTime' => Types\Type\CustomFieldDateTimeType::class,
        'Number' => Types\Type\CustomFieldNumberType::class,

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
