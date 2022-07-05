<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AttributeEnumType extends AttributeType
{
    public const FIELD_VALUES = 'values';

    /**
     * <p>Available values that can be assigned to Products.</p>
     *

     * @return null|AttributePlainEnumValueCollection
     */
    public function getValues();

    /**
     * @param ?AttributePlainEnumValueCollection $values
     */
    public function setValues(?AttributePlainEnumValueCollection $values): void;
}
