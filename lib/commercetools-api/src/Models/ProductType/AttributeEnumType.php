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
     * @return null|AttributePlainEnumValueCollection
     */
    public function getValues();

    /**
     * @param ?AttributePlainEnumValueCollection $values
     */
    public function setValues(?AttributePlainEnumValueCollection $values): void;
}
