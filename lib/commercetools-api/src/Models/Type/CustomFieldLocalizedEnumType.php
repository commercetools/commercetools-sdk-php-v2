<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomFieldLocalizedEnumType extends FieldType
{
    public const FIELD_VALUES = 'values';

    /**
     * <p>Allowed values.</p>
     *
     * @return null|CustomFieldLocalizedEnumValueCollection
     */
    public function getValues();

    /**
     * @param ?CustomFieldLocalizedEnumValueCollection $values
     */
    public function setValues(?CustomFieldLocalizedEnumValueCollection $values): void;
}
