<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyShoppingListChangeLineItemsOrderAction>
 */
final class MyShoppingListChangeLineItemsOrderActionBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $lineItemOrder;

    /**
     * <p>All existing <a href="ctp:api:type:ShoppingListLineItem">ShoppingListLineItem</a> <code>id</code>s of the <a href="ctp:api:type:ShoppingList">ShoppingList</a> in the desired new order.</p>
     *

     * @return null|array
     */
    public function getLineItemOrder()
    {
        return $this->lineItemOrder;
    }

    /**
     * @param ?array $lineItemOrder
     * @return $this
     */
    public function withLineItemOrder(?array $lineItemOrder)
    {
        $this->lineItemOrder = $lineItemOrder;

        return $this;
    }


    public function build(): MyShoppingListChangeLineItemsOrderAction
    {
        return new MyShoppingListChangeLineItemsOrderActionModel(
            $this->lineItemOrder
        );
    }

    public static function of(): MyShoppingListChangeLineItemsOrderActionBuilder
    {
        return new self();
    }
}
