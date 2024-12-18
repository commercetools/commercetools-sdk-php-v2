<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ShoppingList\ShoppingListLineItem;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShoppingListLineItemRemovedMessagePayload extends ShoppingListMessagePayload
{
    public const FIELD_LINE_ITEM = 'lineItem';

    /**
     * <p><a href="ctp:api:type:ShoppingListLineItem">Line Item</a> that was removed from the <a href="ctp:api:type:ShoppingList">ShoppingList</a>.</p>
     *

     * @return null|ShoppingListLineItem
     */
    public function getLineItem();

    /**
     * @param ?ShoppingListLineItem $lineItem
     */
    public function setLineItem(?ShoppingListLineItem $lineItem): void;
}
