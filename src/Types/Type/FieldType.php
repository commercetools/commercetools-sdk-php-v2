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
        'Time' => Types\Type\CustomFieldTimeType::class,
        'DateTime' => Types\Type\CustomFieldDateTimeType::class,
        'Money' => Types\Type\CustomFieldMoneyType::class,
        'Reference' => Types\Type\CustomFieldReferenceType::class,
        'LocalizedString' => Types\Type\CustomFieldLocalizedStringType::class,
        'Number' => Types\Type\CustomFieldNumberType::class,
        'String' => Types\Type\CustomFieldStringType::class,
        'LocalizedEnum' => Types\Type\CustomFieldLocalizedEnumType::class,
        'Date' => Types\Type\CustomFieldDateType::class,
        'Boolean' => Types\Type\CustomFieldBooleanType::class,
        'Enum' => Types\Type\CustomFieldEnumType::class,
        'Set' => Types\Type\CustomFieldSetType::class,

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
