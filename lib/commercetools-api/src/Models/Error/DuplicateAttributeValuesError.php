<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Product\AttributeCollection;

interface DuplicateAttributeValuesError extends ErrorObject
{
    const FIELD_ATTRIBUTES = 'attributes';

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes();

    public function setAttributes(?AttributeCollection $attributes): void;
}
