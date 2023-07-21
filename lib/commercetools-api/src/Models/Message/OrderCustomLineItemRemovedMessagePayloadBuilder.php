<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\CustomLineItem;
use Commercetools\Api\Models\Cart\CustomLineItemBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderCustomLineItemRemovedMessagePayload>
 */
final class OrderCustomLineItemRemovedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $customLineItemId;

    /**

     * @var ?string
     */
    private $customLineItemKey;

    /**

     * @var null|CustomLineItem|CustomLineItemBuilder
     */
    private $customLineItem;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:CustomLineItem">Custom Line Item</a>.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * <p>User-defined unique identifier of the <a href="ctp:api:type:CustomLineItem">Custom Line Item</a>.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemKey()
    {
        return $this->customLineItemKey;
    }

    /**
     * <p><a href="ctp:api:type:CustomLineItem">Custom Line Item</a> that was removed from the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|CustomLineItem
     */
    public function getCustomLineItem()
    {
        return $this->customLineItem instanceof CustomLineItemBuilder ? $this->customLineItem->build() : $this->customLineItem;
    }

    /**
     * @param ?string $customLineItemId
     * @return $this
     */
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

        return $this;
    }

    /**
     * @param ?string $customLineItemKey
     * @return $this
     */
    public function withCustomLineItemKey(?string $customLineItemKey)
    {
        $this->customLineItemKey = $customLineItemKey;

        return $this;
    }

    /**
     * @param ?CustomLineItem $customLineItem
     * @return $this
     */
    public function withCustomLineItem(?CustomLineItem $customLineItem)
    {
        $this->customLineItem = $customLineItem;

        return $this;
    }

    /**
     * @deprecated use withCustomLineItem() instead
     * @return $this
     */
    public function withCustomLineItemBuilder(?CustomLineItemBuilder $customLineItem)
    {
        $this->customLineItem = $customLineItem;

        return $this;
    }

    public function build(): OrderCustomLineItemRemovedMessagePayload
    {
        return new OrderCustomLineItemRemovedMessagePayloadModel(
            $this->customLineItemId,
            $this->customLineItemKey,
            $this->customLineItem instanceof CustomLineItemBuilder ? $this->customLineItem->build() : $this->customLineItem
        );
    }

    public static function of(): OrderCustomLineItemRemovedMessagePayloadBuilder
    {
        return new self();
    }
}
