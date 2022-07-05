<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AttributeLocalizedEnumType extends AttributeType
{
    public const FIELD_VALUES = 'values';

    /**

     * @return null|AttributeLocalizedEnumValueCollection
     */
    public function getValues();

    /**
     * @param ?AttributeLocalizedEnumValueCollection $values
     */
    public function setValues(?AttributeLocalizedEnumValueCollection $values): void;
}
