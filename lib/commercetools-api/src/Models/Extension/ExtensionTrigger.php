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
    public const FIELD_CONDITION = 'condition';

    /**
     * <p><code>cart</code>, <code>order</code>, <code>payment</code>, <code>customer</code>, <code>quote-request</code>, <code>staged-quote</code>, <code>quote</code>, <code>business-unit</code>, and <code>shopping-list</code> are supported.</p>
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
     * <p>Valid <a href="/../api/predicates/query">predicate</a> that controls the conditions under which the API Extension is called. The Extension is not triggered when the specified condition is not fulfilled.</p>
     *

     * @return null|string
     */
    public function getCondition();

    /**
     * @param ?string $resourceTypeId
     */
    public function setResourceTypeId(?string $resourceTypeId): void;

    /**
     * @param ?array $actions
     */
    public function setActions(?array $actions): void;

    /**
     * @param ?string $condition
     */
    public function setCondition(?string $condition): void;
}
