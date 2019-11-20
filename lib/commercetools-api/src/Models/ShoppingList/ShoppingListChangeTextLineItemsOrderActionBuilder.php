<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ShoppingListChangeTextLineItemsOrderAction>
 */
final class ShoppingListChangeTextLineItemsOrderActionBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $textLineItemOrder;

    /**
     * @return null|array
     */
    public function getTextLineItemOrder()
    {
        return $this->textLineItemOrder;
    }

    /**
     * @return $this
     */
    public function withTextLineItemOrder(?array $textLineItemOrder)
    {
        $this->textLineItemOrder = $textLineItemOrder;

        return $this;
    }

    public function build(): ShoppingListChangeTextLineItemsOrderAction
    {
        return new ShoppingListChangeTextLineItemsOrderActionModel(
            $this->textLineItemOrder
        );
    }

    public static function of(): ShoppingListChangeTextLineItemsOrderActionBuilder
    {
        return new self();
    }
}
