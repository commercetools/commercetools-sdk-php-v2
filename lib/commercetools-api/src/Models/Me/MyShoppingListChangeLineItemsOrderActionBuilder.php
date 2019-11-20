<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

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
     * @return null|array
     */
    public function getLineItemOrder()
    {
        return $this->lineItemOrder;
    }

    /**
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
