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
     * <p>Either <code>deliveryId</code> or <code>deliveryKey</code> is required for this update action.</p>
     *

     * @return null|string
     */
    public function getDeliveryId();

    /**
     * <p>Either <code>deliveryId</code> or <code>deliveryKey</code> is required for this update action.</p>
     *

     * @return null|string
     */
    public function getDeliveryKey();

    /**
     * <p>Polymorphic base type that represents a postal address and contact details.
     * Depending on the read or write action, it can be either <a href="ctp:api:type:Address">Address</a> or <a href="ctp:api:type:AddressDraft">AddressDraft</a> that
     * only differ in the data type for the optional <code>custom</code> field.</p>
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
