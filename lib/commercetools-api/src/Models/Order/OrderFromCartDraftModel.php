<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderFromCartDraftModel extends JsonObjectModel implements OrderFromCartDraft
{
    /**
     * @var ?string
     */
    protected $shipmentState;

    /**
     * @var ?string
     */
    protected $orderNumber;

    /**
     * @var ?StateResourceIdentifier
     */
    protected $state;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?string
     */
    protected $paymentState;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?string
     */
    protected $orderState;

    public function __construct(
        string $shipmentState = null,
        string $orderNumber = null,
        StateResourceIdentifier $state = null,
        string $id = null,
        string $paymentState = null,
        int $version = null,
        string $orderState = null
    ) {
        $this->shipmentState = $shipmentState;
        $this->orderNumber = $orderNumber;
        $this->state = $state;
        $this->id = $id;
        $this->paymentState = $paymentState;
        $this->version = $version;
        $this->orderState = $orderState;
    }

    /**
     * @return null|string
     */
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderFromCartDraft::FIELD_SHIPMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->shipmentState = (string) $data;
        }

        return $this->shipmentState;
    }

    /**
     * @return null|string
     */
    public function getOrderNumber()
    {
        if (is_null($this->orderNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderFromCartDraft::FIELD_ORDER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->orderNumber = (string) $data;
        }

        return $this->orderNumber;
    }

    /**
     * @return null|StateResourceIdentifier
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderFromCartDraft::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateResourceIdentifierModel::of($data);
        }

        return $this->state;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderFromCartDraft::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getPaymentState()
    {
        if (is_null($this->paymentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderFromCartDraft::FIELD_PAYMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->paymentState = (string) $data;
        }

        return $this->paymentState;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OrderFromCartDraft::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|string
     */
    public function getOrderState()
    {
        if (is_null($this->orderState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderFromCartDraft::FIELD_ORDER_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->orderState = (string) $data;
        }

        return $this->orderState;
    }

    public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }

    public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    public function setState(?StateResourceIdentifier $state): void
    {
        $this->state = $state;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setPaymentState(?string $paymentState): void
    {
        $this->paymentState = $paymentState;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setOrderState(?string $orderState): void
    {
        $this->orderState = $orderState;
    }
}
