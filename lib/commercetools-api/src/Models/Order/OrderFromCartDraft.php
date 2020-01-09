<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Base\JsonObject;

interface OrderFromCartDraft extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_VERSION = 'version';
    const FIELD_ORDER_NUMBER = 'orderNumber';
    const FIELD_PAYMENT_STATE = 'paymentState';
    const FIELD_SHIPMENT_STATE = 'shipmentState';
    const FIELD_ORDER_STATE = 'orderState';
    const FIELD_STATE = 'state';

    /**
     * <p>The unique id of the cart from which an order is created.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>String that uniquely identifies an order.
     * It can be used to create more human-readable (in contrast to ID) identifier for the order.
     * It should be unique across a project.
     * Once it's set it cannot be changed.
     * For easier use on Get, Update and Delete actions we suggest assigning order numbers that match the regular expression <code>[a-z0-9_-]{2,36}</code>.</p>
     *
     * @return null|string
     */
    public function getOrderNumber();

    /**
     * @return null|string
     */
    public function getPaymentState();

    /**
     * @return null|string
     */
    public function getShipmentState();

    /**
     * <p>Order will be created with <code>Open</code> status by default.</p>
     *
     * @return null|string
     */
    public function getOrderState();

    /**
     * @return null|StateResourceIdentifier
     */
    public function getState();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setOrderNumber(?string $orderNumber): void;

    public function setPaymentState(?string $paymentState): void;

    public function setShipmentState(?string $shipmentState): void;

    public function setOrderState(?string $orderState): void;

    public function setState(?StateResourceIdentifier $state): void;
}
