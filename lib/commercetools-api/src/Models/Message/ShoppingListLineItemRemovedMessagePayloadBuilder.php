<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ShoppingList\ShoppingListLineItem;
use Commercetools\Api\Models\ShoppingList\ShoppingListLineItemBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShoppingListLineItemRemovedMessagePayload>
 */
final class ShoppingListLineItemRemovedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|ShoppingListLineItem|ShoppingListLineItemBuilder
     */
    private $lineItem;

    /**
     * <p><a href="ctp:api:type:ShoppingListLineItem">Line Item</a> that was removed from the <a href="ctp:api:type:ShoppingList">ShoppingList</a>.</p>
     *

     * @return null|ShoppingListLineItem
     */
    public function getLineItem()
    {
        return $this->lineItem instanceof ShoppingListLineItemBuilder ? $this->lineItem->build() : $this->lineItem;
    }

    /**
     * @param ?ShoppingListLineItem $lineItem
     * @return $this
     */
    public function withLineItem(?ShoppingListLineItem $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    /**
     * @deprecated use withLineItem() instead
     * @return $this
     */
    public function withLineItemBuilder(?ShoppingListLineItemBuilder $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    public function build(): ShoppingListLineItemRemovedMessagePayload
    {
        return new ShoppingListLineItemRemovedMessagePayloadModel(
            $this->lineItem instanceof ShoppingListLineItemBuilder ? $this->lineItem->build() : $this->lineItem
        );
    }

    public static function of(): ShoppingListLineItemRemovedMessagePayloadBuilder
    {
        return new self();
    }
}
