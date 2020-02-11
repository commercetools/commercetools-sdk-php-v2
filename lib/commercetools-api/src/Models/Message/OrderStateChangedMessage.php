<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface OrderStateChangedMessage extends Message
{

    public const FIELD_ORDER_STATE = 'orderState';
    public const FIELD_OLD_ORDER_STATE = 'oldOrderState';

    /**
     * @return null|string
     */
    public function getOrderState();

    /**
     * @return null|string
     */
    public function getOldOrderState();

    public function setOrderState(?string $orderState): void;

    public function setOldOrderState(?string $oldOrderState): void;
}
