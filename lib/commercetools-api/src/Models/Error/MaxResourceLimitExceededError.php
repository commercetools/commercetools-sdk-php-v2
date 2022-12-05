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

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;You have exceeded the limit of $limit resources of type $resourceTypeId.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Resource type that reached its maximum limit of configured elements (for example, 100 Zones per Project).</p>
     *

     * @return null|string
     */
    public function getExceededResource();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?string $exceededResource
     */
    public function setExceededResource(?string $exceededResource): void;
}
