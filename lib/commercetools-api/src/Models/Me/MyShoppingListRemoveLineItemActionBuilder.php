<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MyShoppingListRemoveLineItemAction>
 */
final class MyShoppingListRemoveLineItemActionBuilder implements Builder
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

    public function build(): MyShoppingListRemoveLineItemAction
    {
        return new MyShoppingListRemoveLineItemActionModel(
            $this->quantity,
            $this->lineItemId
        );
    }

    public static function of(): MyShoppingListRemoveLineItemActionBuilder
    {
        return new self();
    }
}
