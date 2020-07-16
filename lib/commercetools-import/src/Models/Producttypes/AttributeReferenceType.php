<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AttributeReferenceType extends AttributeType
{
    public const FIELD_REFERENCE_TYPE_ID = 'referenceTypeId';

    /**
     * <p>The type of the referenced resource.</p>
     *
     * @return null|string
     */
    public function getReferenceTypeId();

    /**
     * @param ?string $referenceTypeId
     */
    public function setReferenceTypeId(?string $referenceTypeId): void;
}
