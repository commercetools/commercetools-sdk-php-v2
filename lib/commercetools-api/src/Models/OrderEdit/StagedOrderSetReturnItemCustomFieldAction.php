<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetReturnItemCustomFieldAction extends StagedOrderUpdateAction
{
    public const FIELD_RETURN_ITEM_ID = 'returnItemId';
    public const FIELD_RETURN_ITEM_KEY = 'returnItemKey';
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ReturnItem">ReturnItem</a> to update. Either <code>returnItemId</code> or <code>returnItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getReturnItemId();

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:ReturnItem">ReturnItem</a> to update. Either <code>returnItemId</code> or <code>returnItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getReturnItemKey();

    /**
     * <p>Name of the <a href="/../api/projects/custom-fields">Custom Field</a>.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>If <code>value</code> is absent or <code>null</code>, this field will be removed if it exists.
     * Removing a field that does not exist returns an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error.
     * If <code>value</code> is provided, it is set for the field defined by <code>name</code>.</p>
     *

     * @return null|mixed
     */
    public function getValue();

    /**
     * @param ?string $returnItemId
     */
    public function setReturnItemId(?string $returnItemId): void;

    /**
     * @param ?string $returnItemKey
     */
    public function setReturnItemKey(?string $returnItemKey): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;
}
