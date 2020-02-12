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

interface OrderImportedMessage extends Message
{
    public const FIELD_ORDER = 'order';

    /**
     * @return null|Order
     */
    public function getOrder();

    public function setOrder(?Order $order): void;
}
