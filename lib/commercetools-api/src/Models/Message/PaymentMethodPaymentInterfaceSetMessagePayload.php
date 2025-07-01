<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodPaymentInterfaceSetMessagePayload extends MessagePayload
{
    public const FIELD_PAYMENT_INTERFACE = 'paymentInterface';
    public const FIELD_OLD_PAYMENT_INTERFACE = 'oldPaymentInterface';

    /**
     * <p>Payment interface of the Payment Method after the <a href="ctp:api:type:PaymentMethodSetPaymentInterfaceAction">Set PaymentInterface</a> update action.</p>
     *

     * @return null|string
     */
    public function getPaymentInterface();

    /**
     * <p>Payment interface of the Payment Method before the <a href="ctp:api:type:PaymentMethodSetPaymentInterfaceAction">Set PaymentInterface</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldPaymentInterface();

    /**
     * @param ?string $paymentInterface
     */
    public function setPaymentInterface(?string $paymentInterface): void;

    /**
     * @param ?string $oldPaymentInterface
     */
    public function setOldPaymentInterface(?string $oldPaymentInterface): void;
}
