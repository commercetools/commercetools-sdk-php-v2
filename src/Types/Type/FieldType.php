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
        'Boolean' => Types\Type\CustomFieldBooleanType::class,
        'Date' => Types\Type\CustomFieldDateType::class,
        'Number' => Types\Type\CustomFieldNumberType::class,
        'Set' => Types\Type\CustomFieldSetType::class,
        'Money' => Types\Type\CustomFieldMoneyType::class,
        'Reference' => Types\Type\CustomFieldReferenceType::class,
        'Time' => Types\Type\CustomFieldTimeType::class,
        'Enum' => Types\Type\CustomFieldEnumType::class,
        'DateTime' => Types\Type\CustomFieldDateTimeType::class,
        'LocalizedString' => Types\Type\CustomFieldLocalizedStringType::class,
        'LocalizedEnum' => Types\Type\CustomFieldLocalizedEnumType::class,
        'String' => Types\Type\CustomFieldStringType::class,

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
