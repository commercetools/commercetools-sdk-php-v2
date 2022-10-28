<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderCustomLineItemQuantityChangedMessagePayload>
 */
final class OrderCustomLineItemQuantityChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $customLineItemId;

    /**

     * @var ?int
     */
    private $quantity;

    /**

     * @var ?int
     */
    private $oldQuantity;

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
     * <p><a href="ctp:api:type:CustomLineItem">Custom Line Item</a> quantity after the <a href="ctp:api:type:StagedOrderChangeCustomLineItemQuantityAction">Change Custom Line Item Quantity</a> update action.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p><a href="ctp:api:type:CustomLineItem">Custom Line Item</a> quantity before the <a href="ctp:api:type:StagedOrderChangeCustomLineItemQuantityAction">Change Custom Line Item Quantity</a> update action.</p>
     *

     * @return null|int
     */
    public function getOldQuantity()
    {
        return $this->oldQuantity;
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
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param ?int $oldQuantity
     * @return $this
     */
    public function withOldQuantity(?int $oldQuantity)
    {
        $this->oldQuantity = $oldQuantity;

        return $this;
    }


    public function build(): OrderCustomLineItemQuantityChangedMessagePayload
    {
        return new OrderCustomLineItemQuantityChangedMessagePayloadModel(
            $this->customLineItemId,
            $this->quantity,
            $this->oldQuantity
        );
    }

    public static function of(): OrderCustomLineItemQuantityChangedMessagePayloadBuilder
    {
        return new self();
    }
}
