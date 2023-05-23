<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderRemoveDeliveryAction extends StagedOrderUpdateAction
{
    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_DELIVERY_KEY = 'deliveryKey';

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
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;

    /**
     * @param ?string $deliveryKey
     */
    public function setDeliveryKey(?string $deliveryKey): void;
}
