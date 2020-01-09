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
     * @return null|LineItem
     */
    public function getLineItem()
    {
        return $this->lineItem instanceof LineItemBuilder ? $this->lineItem->build() : $this->lineItem;
    }

    /**
     * @return null|int
     */
    public function getAddedQuantity()
    {
        return $this->addedQuantity;
    }

    /**
     * @return $this
     */
    public function withLineItem(?LineItem $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAddedQuantity(?int $addedQuantity)
    {
        $this->addedQuantity = $addedQuantity;

        return $this;
    }

    /**
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
