<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Producttypes;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface AttributeReferenceType extends AttributeType
{

    public const FIELD_REFERENCE_TYPE_ID = 'referenceTypeId';

    /**
     * <p>The type of the referenced resource.</p>
     *
     * @return null|string
     */
    public function getReferenceTypeId();

    public function setReferenceTypeId(?string $referenceTypeId): void;
}
