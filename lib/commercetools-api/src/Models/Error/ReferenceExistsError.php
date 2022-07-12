<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReferenceExistsError extends ErrorObject
{
    public const FIELD_REFERENCED_BY = 'referencedBy';

    /**
     * <p>Type of resource the value should reference. Supported resource type identifiers are:</p>
     *

     * @return null|string
     */
    public function getReferencedBy();

    /**
     * @param ?string $referencedBy
     */
    public function setReferencedBy(?string $referencedBy): void;
}
