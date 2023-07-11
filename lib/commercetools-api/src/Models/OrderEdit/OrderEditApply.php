<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderEditApply extends JsonObject
{
    public const FIELD_EDIT_VERSION = 'editVersion';
    public const FIELD_RESOURCE_VERSION = 'resourceVersion';

    /**
     * <p>Current <code>version</code> of the OrderEdit to be applied.</p>
     *

     * @return null|int
     */
    public function getEditVersion();

    /**
     * <p>Current <code>version</code> of the <a href="ctp:api:type:Order">Order</a> to which the OrderEdit is applied.</p>
     *

     * @return null|int
     */
    public function getResourceVersion();

    /**
     * @param ?int $editVersion
     */
    public function setEditVersion(?int $editVersion): void;

    /**
     * @param ?int $resourceVersion
     */
    public function setResourceVersion(?int $resourceVersion): void;
}
