<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifier;

interface StagedOrderAddPaymentAction extends StagedOrderUpdateAction
{
    
    const FIELD_PAYMENT = 'payment';

    /**
     *
     * @return PaymentResourceIdentifier|null
     */
    public function getPayment();
    public function setPayment(?PaymentResourceIdentifier $payment): void;
}