<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSetDeliveryAddressAction extends OrderUpdateAction
{
    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_DELIVERY_KEY = 'deliveryKey';
    public const FIELD_ADDRESS = 'address';

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     * <p>Either <code>deliveryId</code> or <code>deliveryKey</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getDeliveryId();

    /**
     * <p><code>key</code> of an existing <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     * <p>Either <code>deliveryId</code> or <code>deliveryKey</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getDeliveryKey();

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|BaseAddress
     */
    public function getAddress();

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;

    /**
     * @param ?string $deliveryKey
     */
    public function setDeliveryKey(?string $deliveryKey): void;

    /**
     * @param ?BaseAddress $address
     */
    public function setAddress(?BaseAddress $address): void;
}
