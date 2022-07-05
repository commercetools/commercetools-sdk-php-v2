<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSetReturnPaymentStateAction extends OrderUpdateAction
{
    public const FIELD_RETURN_ITEM_ID = 'returnItemId';
    public const FIELD_PAYMENT_STATE = 'paymentState';

    /**

     * @return null|string
     */
    public function getReturnItemId();

    /**

     * @return null|string
     */
    public function getPaymentState();

    /**
     * @param ?string $returnItemId
     */
    public function setReturnItemId(?string $returnItemId): void;

    /**
     * @param ?string $paymentState
     */
    public function setPaymentState(?string $paymentState): void;
}
