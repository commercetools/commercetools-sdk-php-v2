<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomFieldReferenceType extends FieldType
{
    public const FIELD_REFERENCE_TYPE_ID = 'referenceTypeId';

    /**
     * <p>Resource type the Custom Field can reference.</p>
     *
     * @return null|string
     */
    public function getReferenceTypeId();

    /**
     * @param ?string $referenceTypeId
     */
    public function setReferenceTypeId(?string $referenceTypeId): void;
}
