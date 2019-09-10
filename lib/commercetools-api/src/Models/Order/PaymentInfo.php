<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Payment\PaymentReferenceCollection;

interface PaymentInfo extends JsonObject
{
    
    const FIELD_PAYMENTS = 'payments';

    /**
     *
     * @return PaymentReferenceCollection|null
     */
    public function getPayments();
    public function setPayments(?PaymentReferenceCollection $payments): void;
}