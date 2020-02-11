<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Productvariants\AttributeCollection;

interface DuplicateAttributeValuesError extends ErrorObject
{
    public const FIELD_ATTRIBUTES = 'attributes';

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes();

    public function setAttributes(?AttributeCollection $attributes): void;
}
