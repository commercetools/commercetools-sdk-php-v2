<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface AttributeReferenceType extends AttributeType
{

    public const FIELD_REFERENCE_TYPE_ID = 'referenceTypeId';

    /**
     * @return null|string
     */
    public function getReferenceTypeId();

    public function setReferenceTypeId(?string $referenceTypeId): void;
}
