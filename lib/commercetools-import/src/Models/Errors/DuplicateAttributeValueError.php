<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Productvariants\Attribute;

interface DuplicateAttributeValueError extends ErrorObject
{

    public const FIELD_ATTRIBUTE = 'attribute';

    /**
     * <p>The conflicting attribute.</p>
     *
     * @return null|Attribute
     */
    public function getAttribute();

    public function setAttribute(?Attribute $attribute): void;
}
