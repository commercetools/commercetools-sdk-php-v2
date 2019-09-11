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
     * @var ?string
     */
    private $action;

    /**
     * @var ?array
     */
    private $lineItemOrder;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

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
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
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
            $this->action,
            $this->lineItemOrder
        );
    }

    public static function of(): MyShoppingListChangeLineItemsOrderActionBuilder
    {
        return new self();
    }
}
