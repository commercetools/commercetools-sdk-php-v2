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
 * @implements Builder<MyShoppingListRemoveLineItemAction>
 */
final class MyShoppingListRemoveLineItemActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $lineItemId;

    /**

     * @var ?int
     */
    private $quantity;

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:ShoppingListLineItem">ShoppingListLineItem</a> to update.</p>
     *

     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * <p>Amount to remove from the <code>quantity</code> of the ShoppingListLineItem. If not set, the ShoppingListLineItem is removed from the ShoppingList. If this value matches or exceeds the current <code>quantity</code> of the ShoppingListLineItem, the ShoppingListLineItem is removed from the ShoppingList.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param ?string $lineItemId
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }


    public function build(): MyShoppingListRemoveLineItemAction
    {
        return new MyShoppingListRemoveLineItemActionModel(
            $this->lineItemId,
            $this->quantity
        );
    }

    public static function of(): MyShoppingListRemoveLineItemActionBuilder
    {
        return new self();
    }
}
