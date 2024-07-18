<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartChangeLineItemsOrderAction extends CartUpdateAction
{
    public const FIELD_LINE_ITEM_ORDER = 'lineItemOrder';

    /**
     * <p>All existing <a href="ctp:api:type:LineItem">LineItem</a> <code>id</code>s in the desired new order.</p>
     *

     * @return null|array
     */
    public function getLineItemOrder();

    /**
     * @param ?array $lineItemOrder
     */
    public function setLineItemOrder(?array $lineItemOrder): void;
}
