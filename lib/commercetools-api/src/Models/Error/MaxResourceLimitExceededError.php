<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MaxResourceLimitExceededError extends ErrorObject
{
    public const FIELD_EXCEEDED_RESOURCE = 'exceededResource';

    /**
     * <p>supported resource type identifiers:</p>
     *
     * @return null|string
     */
    public function getExceededResource();

    /**
     * @param ?string $exceededResource
     */
    public function setExceededResource(?string $exceededResource): void;
}
