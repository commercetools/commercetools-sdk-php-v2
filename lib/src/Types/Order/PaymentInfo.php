<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Payment\PaymentReference;
use Commercetools\Types\Payment\PaymentReferenceCollection;

interface PaymentInfo extends JsonObject
{
    const FIELD_PAYMENTS = 'payments';

    /**
     * @return PaymentReferenceCollection
     */
    public function getPayments();

    /**
     * @param PaymentReferenceCollection $payments
     * @return $this
     */
    public function setPayments(PaymentReferenceCollection $payments);

}
