<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObjectModel;

final class OrderStateChangedMessagePayloadModel extends JsonObjectModel implements OrderStateChangedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderStateChanged';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $orderState;

    /**
     * @var ?string
     */
    protected $oldOrderState;

    public function __construct(
        string $orderState = null,
        string $oldOrderState = null
    ) {
        $this->orderState = $orderState;
        $this->oldOrderState = $oldOrderState;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getOrderState()
    {
        if (is_null($this->orderState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderStateChangedMessagePayload::FIELD_ORDER_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->orderState = (string) $data;
        }

        return $this->orderState;
    }

    /**
     * @return null|string
     */
    public function getOldOrderState()
    {
        if (is_null($this->oldOrderState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderStateChangedMessagePayload::FIELD_OLD_ORDER_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->oldOrderState = (string) $data;
        }

        return $this->oldOrderState;
    }

    public function setOrderState(?string $orderState): void
    {
        $this->orderState = $orderState;
    }

    public function setOldOrderState(?string $oldOrderState): void
    {
        $this->oldOrderState = $oldOrderState;
    }
}
