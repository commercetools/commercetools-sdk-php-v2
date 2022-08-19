<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\LineItem;
use Commercetools\Api\Models\Cart\LineItemBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderLineItemAddedMessagePayload>
 */
final class OrderLineItemAddedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|LineItem|LineItemBuilder
     */
    private $lineItem;

    /**

     * @var ?int
     */
    private $addedQuantity;

    /**
     * <p><a href="ctp:api:type:LineItem">Line Item</a> that was added to the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|LineItem
     */
    public function getLineItem()
    {
        return $this->lineItem instanceof LineItemBuilder ? $this->lineItem->build() : $this->lineItem;
    }

    /**
     * <p>Quantity of <a href="ctp:api:type:LineItem">Line Items</a> that were added to the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|int
     */
    public function getAddedQuantity()
    {
        return $this->addedQuantity;
    }

    /**
     * @param ?LineItem $lineItem
     * @return $this
     */
    public function withLineItem(?LineItem $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    /**
     * @param ?int $addedQuantity
     * @return $this
     */
    public function withAddedQuantity(?int $addedQuantity)
    {
        $this->addedQuantity = $addedQuantity;

        return $this;
    }

    /**
     * @deprecated use withLineItem() instead
     * @return $this
     */
    public function withLineItemBuilder(?LineItemBuilder $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    public function build(): OrderLineItemAddedMessagePayload
    {
        return new OrderLineItemAddedMessagePayloadModel(
            $this->lineItem instanceof LineItemBuilder ? $this->lineItem->build() : $this->lineItem,
            $this->addedQuantity
        );
    }

    public static function of(): OrderLineItemAddedMessagePayloadBuilder
    {
        return new self();
    }
}
