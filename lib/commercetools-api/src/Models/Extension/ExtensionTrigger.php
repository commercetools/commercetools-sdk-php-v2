<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ExtensionTrigger extends JsonObject
{
    public const FIELD_RESOURCE_TYPE_ID = 'resourceTypeId';
    public const FIELD_ACTIONS = 'actions';

    /**
     * <p><code>cart</code>, <code>order</code>, <code>payment</code>, and <code>customer</code> are supported.</p>
     *
     * @return null|string
     */
    public function getResourceTypeId();

    /**
     * <p><code>Create</code> and <code>Update</code> requests are supported.</p>
     *
     * @return null|array
     */
    public function getActions();

    /**
     * @param ?string $resourceTypeId
     */
    public function setResourceTypeId(?string $resourceTypeId): void;

    /**
     * @param ?array $actions
     */
    public function setActions(?array $actions): void;
}
