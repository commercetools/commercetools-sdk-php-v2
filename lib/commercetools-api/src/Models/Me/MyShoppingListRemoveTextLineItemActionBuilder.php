<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MyShoppingListRemoveTextLineItemAction>
 */
final class MyShoppingListRemoveTextLineItemActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @var ?string
     */
    private $textLineItemId;

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
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
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

    public function build(): MyShoppingListRemoveTextLineItemAction
    {
        return new MyShoppingListRemoveTextLineItemActionModel(
            $this->action,
            $this->quantity,
            $this->textLineItemId
        );
    }

    public static function of(): MyShoppingListRemoveTextLineItemActionBuilder
    {
        return new self();
    }
}
