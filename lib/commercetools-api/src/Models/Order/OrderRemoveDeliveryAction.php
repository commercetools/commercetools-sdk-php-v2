<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface OrderRemoveDeliveryAction extends OrderUpdateAction
{

    public const FIELD_DELIVERY_ID = 'deliveryId';

    /**
     * @return null|string
     */
    public function getDeliveryId();

    public function setDeliveryId(?string $deliveryId): void;
}
