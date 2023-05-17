<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSetDeliveryAddressCustomFieldAction extends OrderUpdateAction
{
    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_DELIVERY_KEY = 'deliveryKey';
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

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
     * <p>Name of the <a href="/../api/projects/custom-fields">Custom Field</a>.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>If <code>value</code> is absent or <code>null</code>, this field will be removed if it exists.
     * Removing a field that does not exist returns an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error.
     * If <code>value</code> is provided, it is set for the field defined by <code>name</code>.</p>
     *

     * @return null|mixed
     */
    public function getValue();

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;

    /**
     * @param ?string $deliveryKey
     */
    public function setDeliveryKey(?string $deliveryKey): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;
}
