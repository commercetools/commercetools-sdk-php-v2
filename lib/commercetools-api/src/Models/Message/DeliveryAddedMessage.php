<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Delivery;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DeliveryAddedMessage extends Message
{
    public const FIELD_DELIVERY = 'delivery';

    /**
     * @return null|Delivery
     */
    public function getDelivery();

    public function setDelivery(?Delivery $delivery): void;
}
