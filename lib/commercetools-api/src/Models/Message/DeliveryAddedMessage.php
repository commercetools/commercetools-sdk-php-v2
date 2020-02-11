<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Order\Delivery;

interface DeliveryAddedMessage extends Message
{

    public const FIELD_DELIVERY = 'delivery';

    /**
     * @return null|Delivery
     */
    public function getDelivery();

    public function setDelivery(?Delivery $delivery): void;
}
