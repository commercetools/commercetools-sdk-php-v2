<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyShoppingListChangeTextLineItemsOrderAction extends MyShoppingListUpdateAction
{
    public const FIELD_TEXT_LINE_ITEM_ORDER = 'textLineItemOrder';

    /**
     * <p>All existing <a href="ctp:api:type:TextLineItem">TextLineItem</a> <code>id</code>s in the desired new order.</p>
     *

     * @return null|array
     */
    public function getTextLineItemOrder();

    /**
     * @param ?array $textLineItemOrder
     */
    public function setTextLineItemOrder(?array $textLineItemOrder): void;
}
