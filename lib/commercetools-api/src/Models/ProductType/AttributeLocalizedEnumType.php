<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AttributeLocalizedEnumType extends AttributeType
{
    public const FIELD_VALUES = 'values';

    /**
     * <p>Available values that can be assigned to Products.</p>
     *
     * @return null|AttributeLocalizedEnumValueCollection
     */
    public function getValues();

    /**
     * @param ?AttributeLocalizedEnumValueCollection $values
     */
    public function setValues(?AttributeLocalizedEnumValueCollection $values): void;
}
