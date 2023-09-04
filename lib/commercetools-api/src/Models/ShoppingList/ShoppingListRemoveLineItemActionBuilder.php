<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShoppingListRemoveLineItemAction>
 */
final class ShoppingListRemoveLineItemActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $lineItemId;

    /**

     * @var ?string
     */
    private $lineItemKey;

    /**

     * @var ?int
     */
    private $quantity;

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:ShoppingListLineItem">ShoppingListLineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * <p>The <code>key</code> of the <a href="ctp:api:type:ShoppingListLineItem">ShoppingListLineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getLineItemKey()
    {
        return $this->lineItemKey;
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
     * @param ?string $lineItemKey
     * @return $this
     */
    public function withLineItemKey(?string $lineItemKey)
    {
        $this->lineItemKey = $lineItemKey;

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


    public function build(): ShoppingListRemoveLineItemAction
    {
        return new ShoppingListRemoveLineItemActionModel(
            $this->lineItemId,
            $this->lineItemKey,
            $this->quantity
        );
    }

    public static function of(): ShoppingListRemoveLineItemActionBuilder
    {
        return new self();
    }
}
