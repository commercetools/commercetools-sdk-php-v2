<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderStateChangedMessagePayload extends OrderMessagePayload
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

    /**
     * @param ?string $orderState
     */
    public function setOrderState(?string $orderState): void;

    /**
     * @param ?string $oldOrderState
     */
    public function setOldOrderState(?string $oldOrderState): void;
}
