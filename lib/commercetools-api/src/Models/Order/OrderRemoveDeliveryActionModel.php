<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObjectModel;

final class OrderRemoveDeliveryActionModel extends JsonObjectModel implements OrderRemoveDeliveryAction
{
    const DISCRIMINATOR_VALUE = 'removeDelivery';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $deliveryId;

    public function __construct(
        string $action = null,
        string $deliveryId = null
    ) {
        $this->action = $action;
        $this->deliveryId = $deliveryId;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getDeliveryId()
    {
        if (is_null($this->deliveryId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderRemoveDeliveryAction::FIELD_DELIVERY_ID);
            if (is_null($data)) {
                return null;
            }
            $this->deliveryId = (string) $data;
        }

        return $this->deliveryId;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setDeliveryId(?string $deliveryId): void
    {
        $this->deliveryId = $deliveryId;
    }
}
