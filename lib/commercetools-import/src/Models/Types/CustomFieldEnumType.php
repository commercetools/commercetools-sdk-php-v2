<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Types;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomFieldEnumType extends FieldType
{
    public const FIELD_VALUES = 'values';

    /**
     * <p>Allowed values.</p>
     *

     * @return null|CustomFieldEnumValueCollection
     */
    public function getValues();

    /**
     * @param ?CustomFieldEnumValueCollection $values
     */
    public function setValues(?CustomFieldEnumValueCollection $values): void;
}
