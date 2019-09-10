<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;

interface ShoppingListSetLineItemCustomFieldAction extends ShoppingListUpdateAction
{
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_NAME = 'name';
    const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|JsonObject
     */
    public function getValue();

    public function setLineItemId(?string $lineItemId): void;

    public function setName(?string $name): void;

    public function setValue(?JsonObject $value): void;
}
