<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ShoppingListChangeLineItemQuantityAction>
 */
final class ShoppingListChangeLineItemQuantityActionBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @var ?string
     */
    private $lineItemId;

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    public function build(): ShoppingListChangeLineItemQuantityAction
    {
        return new ShoppingListChangeLineItemQuantityActionModel(
            $this->quantity,
            $this->lineItemId
        );
    }

    public static function of(): ShoppingListChangeLineItemQuantityActionBuilder
    {
        return new self();
    }
}
