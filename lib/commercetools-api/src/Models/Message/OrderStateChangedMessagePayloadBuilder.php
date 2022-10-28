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
 * @implements Builder<OrderStateChangedMessagePayload>
 */
final class OrderStateChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $orderState;

    /**

     * @var ?string
     */
    private $oldOrderState;

    /**
     * <p><a href="ctp:api:type:OrderState">OrderState</a> after the <a href="ctp:api:type:OrderChangeOrderStateAction">Change Order State</a> update action.</p>
     *

     * @return null|string
     */
    public function getOrderState()
    {
        return $this->orderState;
    }

    /**
     * <p><a href="ctp:api:type:OrderState">OrderState</a> before the <a href="ctp:api:type:OrderChangeOrderStateAction">Change Order State</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldOrderState()
    {
        return $this->oldOrderState;
    }

    /**
     * @param ?string $orderState
     * @return $this
     */
    public function withOrderState(?string $orderState)
    {
        $this->orderState = $orderState;

        return $this;
    }

    /**
     * @param ?string $oldOrderState
     * @return $this
     */
    public function withOldOrderState(?string $oldOrderState)
    {
        $this->oldOrderState = $oldOrderState;

        return $this;
    }


    public function build(): OrderStateChangedMessagePayload
    {
        return new OrderStateChangedMessagePayloadModel(
            $this->orderState,
            $this->oldOrderState
        );
    }

    public static function of(): OrderStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}
