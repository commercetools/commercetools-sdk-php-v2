<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ResourceNotFoundError extends ErrorObject
{
    public const FIELD_RESOURCE = 'resource';

    /**
     * <p>The resource that was not found.</p>
     *

     * @return null|mixed
     */
    public function getResource();

    /**
     * @param mixed $resource
     */
    public function setResource($resource): void;
}
