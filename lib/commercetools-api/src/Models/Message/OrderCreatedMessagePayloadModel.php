<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderCreatedMessagePayloadModel extends JsonObjectModel implements OrderCreatedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderCreated';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?Order
     */
    protected $order;

    public function __construct(
        string $type = null,
        Order $order = null
    ) {
        $this->type = $type;
        $this->order = $order;
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
     * @return null|Order
     */
    public function getOrder()
    {
        if (is_null($this->order)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderCreatedMessagePayload::FIELD_ORDER);
            if (is_null($data)) {
                return null;
            }

            $this->order = OrderModel::of($data);
        }

        return $this->order;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setOrder(?Order $order): void
    {
        $this->order = $order;
    }
}
