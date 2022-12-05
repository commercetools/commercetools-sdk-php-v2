<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodInfo extends JsonObject
{
    public const FIELD_PAYMENT_INTERFACE = 'paymentInterface';
    public const FIELD_METHOD = 'method';
    public const FIELD_NAME = 'name';

    /**
     * <p>Payment service that processes the Payment (for example, a PSP).
     * Once set, it cannot be changed.
     * The combination of <code>paymentInterface</code> and the <code>interfaceId</code> of a <a href="ctp:api:type:Payment">Payment</a> must be unique.</p>
     *

     * @return null|string
     */
    public function getPaymentInterface();

    /**
     * <p>Payment method used, for example, credit card, or cash advance.</p>
     *

     * @return null|string
     */
    public function getMethod();

    /**
     * <p>Localizable name of the payment method.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @param ?string $paymentInterface
     */
    public function setPaymentInterface(?string $paymentInterface): void;

    /**
     * @param ?string $method
     */
    public function setMethod(?string $method): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;
}
