<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyShoppingListChangeLineItemsOrderAction extends MyShoppingListUpdateAction
{
    public const FIELD_LINE_ITEM_ORDER = 'lineItemOrder';

    /**

     * @return null|array
     */
    public function getLineItemOrder();

    /**
     * @param ?array $lineItemOrder
     */
    public function setLineItemOrder(?array $lineItemOrder): void;
}
