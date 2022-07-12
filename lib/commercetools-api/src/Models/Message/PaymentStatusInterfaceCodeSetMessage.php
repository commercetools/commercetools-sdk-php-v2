<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentStatusInterfaceCodeSetMessage extends Message
{
    public const FIELD_PAYMENT_ID = 'paymentId';
    public const FIELD_INTERFACE_CODE = 'interfaceCode';

    /**

     * @return null|string
     */
    public function getPaymentId();

    /**

     * @return null|string
     */
    public function getInterfaceCode();

    /**
     * @param ?string $paymentId
     */
    public function setPaymentId(?string $paymentId): void;

    /**
     * @param ?string $interfaceCode
     */
    public function setInterfaceCode(?string $interfaceCode): void;
}
