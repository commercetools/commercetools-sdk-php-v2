<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentStatusInterfaceCodeSetMessagePayload extends MessagePayload
{
    public const FIELD_PAYMENT_ID = 'paymentId';
    public const FIELD_INTERFACE_CODE = 'interfaceCode';

    /**
     * <p>Unique identifier for the <a href="ctp:api:type:Payment">Payment</a> for which the <a href="ctp:api:type:PaymentSetStatusInterfaceCodeAction">Set StatusInterfaceCode</a> update action was applied.</p>
     *

     * @return null|string
     */
    public function getPaymentId();

    /**
     * <p>The <code>interfaceCode</code> that was set during the <a href="ctp:api:type:PaymentSetStatusInterfaceCodeAction">Set StatusInterfaceCode</a> update action.</p>
     *

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
