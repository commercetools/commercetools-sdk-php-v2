<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MyShoppingListChangeTextLineItemQuantityAction>
 */
final class MyShoppingListChangeTextLineItemQuantityActionBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @var ?string
     */
    private $textLineItemId;

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
    public function getTextLineItemId()
    {
        return $this->textLineItemId;
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
    public function withTextLineItemId(?string $textLineItemId)
    {
        $this->textLineItemId = $textLineItemId;

        return $this;
    }

    public function build(): MyShoppingListChangeTextLineItemQuantityAction
    {
        return new MyShoppingListChangeTextLineItemQuantityActionModel(
            $this->quantity,
            $this->textLineItemId
        );
    }

    public static function of(): MyShoppingListChangeTextLineItemQuantityActionBuilder
    {
        return new self();
    }
}
