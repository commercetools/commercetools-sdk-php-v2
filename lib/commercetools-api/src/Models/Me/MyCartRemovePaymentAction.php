<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifier;

interface MyCartRemovePaymentAction extends MyCartUpdateAction
{

    public const FIELD_PAYMENT = 'payment';

    /**
     * @return null|PaymentResourceIdentifier
     */
    public function getPayment();

    public function setPayment(?PaymentResourceIdentifier $payment): void;
}
