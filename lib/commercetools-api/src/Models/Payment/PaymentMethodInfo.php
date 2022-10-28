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
     * <p>The interface that handles the payment (usually a PSP).
     * Cannot be changed once it has been set.
     * The combination of Payment<code>interfaceId</code> and this field must be unique.</p>
     *

     * @return null|string
     */
    public function getPaymentInterface();

    /**
     * <p>The payment method that is used, e.g.
     * e.g.
     * a conventional string representing Credit Card, Cash Advance etc.</p>
     *

     * @return null|string
     */
    public function getMethod();

    /**
     * <p>A human-readable, localized name for the payment method, e.g.
     * 'Credit Card'.</p>
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
