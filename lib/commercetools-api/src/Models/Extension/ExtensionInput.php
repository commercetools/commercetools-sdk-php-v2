<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ExtensionInput extends JsonObject
{
    public const FIELD_ACTION = 'action';
    public const FIELD_RESOURCE = 'resource';
    public const FIELD_OLD_RESOURCE = 'oldResource';

    /**
     * <p><code>Create</code> or <code>Update</code> request.</p>
     *

     * @return null|string
     */
    public function getAction();

    /**
     * <p>Expanded reference to the resource that triggered the Extension.</p>
     *

     * @return null|Reference
     */
    public function getResource();

    /**
     * <p>Expanded reference to the resource as it was before the update. Only included when <a href="ctp:api:type:ExtensionAdditionalContext"><code>additionalContext.includeOldResource</code></a> is <code>true</code> on the <a href="ctp:api:type:Extension">Extension</a> and the <code>action</code> is <code>Update</code>.</p>
     *

     * @return null|Reference
     */
    public function getOldResource();

    /**
     * @param ?string $action
     */
    public function setAction(?string $action): void;

    /**
     * @param ?Reference $resource
     */
    public function setResource(?Reference $resource): void;

    /**
     * @param ?Reference $oldResource
     */
    public function setOldResource(?Reference $oldResource): void;
}
