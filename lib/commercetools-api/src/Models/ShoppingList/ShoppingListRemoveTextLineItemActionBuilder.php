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
 * @implements Builder<ShoppingListRemoveTextLineItemAction>
 */
final class ShoppingListRemoveTextLineItemActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $textLineItemId;

    /**

     * @var ?string
     */
    private $textLineItemKey;

    /**

     * @var ?int
     */
    private $quantity;

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:TextLineItem">TextLineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getTextLineItemId()
    {
        return $this->textLineItemId;
    }

    /**
     * <p>The <code>key</code> of the <a href="ctp:api:type:TextLineItem">TextLineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getTextLineItemKey()
    {
        return $this->textLineItemKey;
    }

    /**
     * <p>Amount to remove from the <code>quantity</code> of the TextLineItem. If not set, the TextLineItem is removed from the ShoppingList. If this value matches or exceeds the current <code>quantity</code> of the TextLineItem, the TextLineItem is removed from the ShoppingList.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param ?string $textLineItemId
     * @return $this
     */
    public function withTextLineItemId(?string $textLineItemId)
    {
        $this->textLineItemId = $textLineItemId;

        return $this;
    }

    /**
     * @param ?string $textLineItemKey
     * @return $this
     */
    public function withTextLineItemKey(?string $textLineItemKey)
    {
        $this->textLineItemKey = $textLineItemKey;

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


    public function build(): ShoppingListRemoveTextLineItemAction
    {
        return new ShoppingListRemoveTextLineItemActionModel(
            $this->textLineItemId,
            $this->textLineItemKey,
            $this->quantity
        );
    }

    public static function of(): ShoppingListRemoveTextLineItemActionBuilder
    {
        return new self();
    }
}
