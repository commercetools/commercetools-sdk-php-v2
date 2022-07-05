<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Payment\PaymentResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCartRemovePaymentAction extends MyCartUpdateAction
{
    public const FIELD_PAYMENT = 'payment';

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:Payment">Payment</a>.</p>
     *

     * @return null|PaymentResourceIdentifier
     */
    public function getPayment();

    /**
     * @param ?PaymentResourceIdentifier $payment
     */
    public function setPayment(?PaymentResourceIdentifier $payment): void;
}
