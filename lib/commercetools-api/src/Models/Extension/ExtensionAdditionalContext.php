<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ExtensionAdditionalContext extends JsonObject
{
    public const FIELD_INCLUDE_OLD_RESOURCE = 'includeOldResource';

    /**
     * <p>Set to <code>true</code>, if the payload sent to the API Extension should include an <a href="ctp:api:type:ExtensionInput"><code>oldResource</code></a> field with the state of the resource before the update.
     * This only applies to <code>Update</code> actions. For <code>Create</code> actions, <code>oldResource</code> is not included.</p>
     *

     * @return null|bool
     */
    public function getIncludeOldResource();

    /**
     * @param ?bool $includeOldResource
     */
    public function setIncludeOldResource(?bool $includeOldResource): void;
}
