<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderFromCartDraft extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_CART = 'cart';
    public const FIELD_VERSION = 'version';
    public const FIELD_ORDER_NUMBER = 'orderNumber';
    public const FIELD_PURCHASE_ORDER_NUMBER = 'purchaseOrderNumber';
    public const FIELD_PAYMENT_STATE = 'paymentState';
    public const FIELD_SHIPMENT_STATE = 'shipmentState';
    public const FIELD_ORDER_STATE = 'orderState';
    public const FIELD_STATE = 'state';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Cart">Cart</a> used to create the Order.</p>
     *
     * @deprecated
     * @return null|string
     */
    public function getId();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Cart from which the Order is created.</p>
     * <p>This field is required, but is marked as optional for backwards compatibility reasons.</p>
     *

     * @return null|CartResourceIdentifier
     */
    public function getCart();

    /**
     * <p><code>version</code> of the <a href="ctp:api:type:Cart">Cart</a> from which the Order is created.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>User-defined identifier for the Order that is unique across a Project.
     * Once set, the value cannot be changed.</p>
     *

     * @return null|string
     */
    public function getOrderNumber();

    /**
     * <p>User-defined identifier for a purchase Order.</p>
     * <p>It is typically set by the <a href="ctp:api:type:Buyer">Buyer</a> and can be used with <a href="/quotes-overview">Quotes</a> to track the purchase Order during the <a href="/../api/quotes-overview#intended-workflow">quote and order flow</a>.</p>
     *

     * @return null|string
     */
    public function getPurchaseOrderNumber();

    /**
     * <p>Payment status for the Order.</p>
     *

     * @return null|string
     */
    public function getPaymentState();

    /**
     * <p>Shipment status for the Order.</p>
     *

     * @return null|string
     */
    public function getShipmentState();

    /**
     * <p>Current status for the Order.</p>
     *

     * @return null|string
     */
    public function getOrderState();

    /**
     * <p>State for the Order in a custom workflow.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getState();

    /**
     * <p>Custom Fields for the Order.
     * The Custom Fields' type must match the Custom Fields' type in the referenced <a href="ctp:api:type:Cart">Cart</a>.</p>
     * <ul>
     * <li>If empty, the Custom Fields on the referenced <a href="ctp:api:type:Cart">Cart</a> are added to the Order automatically.</li>
     * <li>If specified, the Custom Fields are merged with the Custom Fields on the referenced <a href="ctp:api:type:Cart">Cart</a> and added to the Order.</li>
     * </ul>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?CartResourceIdentifier $cart
     */
    public function setCart(?CartResourceIdentifier $cart): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void;

    /**
     * @param ?string $purchaseOrderNumber
     */
    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): void;

    /**
     * @param ?string $paymentState
     */
    public function setPaymentState(?string $paymentState): void;

    /**
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void;

    /**
     * @param ?string $orderState
     */
    public function setOrderState(?string $orderState): void;

    /**
     * @param ?StateResourceIdentifier $state
     */
    public function setState(?StateResourceIdentifier $state): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
