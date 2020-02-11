<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface PaymentStatusInterfaceCodeSetMessagePayload extends MessagePayload
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

    public function setPaymentId(?string $paymentId): void;

    public function setInterfaceCode(?string $interfaceCode): void;
}
