<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Order;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderCreatedMessagePayload extends MessagePayload
{
    public const FIELD_ORDER = 'order';

    /**
     * @return null|Order
     */
    public function getOrder();

    /**
     * @param ?Order $order
     */
    public function setOrder(?Order $order): void;
}
