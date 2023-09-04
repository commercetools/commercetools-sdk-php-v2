<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShoppingListSetLineItemCustomFieldAction extends ShoppingListUpdateAction
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_LINE_ITEM_KEY = 'lineItemKey';
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:ShoppingListLineItem">ShoppingListLineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * <p>The <code>key</code> of the <a href="ctp:api:type:ShoppingListLineItem">ShoppingListLineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getLineItemKey();

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
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?string $lineItemKey
     */
    public function setLineItemKey(?string $lineItemKey): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;
}
