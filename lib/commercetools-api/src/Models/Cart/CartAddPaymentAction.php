<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifier;

interface CartAddPaymentAction extends CartUpdateAction
{

    public const FIELD_PAYMENT = 'payment';

    /**
     * @return null|PaymentResourceIdentifier
     */
    public function getPayment();

    public function setPayment(?PaymentResourceIdentifier $payment): void;
}
