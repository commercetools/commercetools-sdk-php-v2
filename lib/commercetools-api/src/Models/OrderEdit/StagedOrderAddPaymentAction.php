<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderAddPaymentAction extends StagedOrderUpdateAction
{
    public const FIELD_PAYMENT = 'payment';

    /**
     * <p>Payment to add to the <a href="ctp:api:type:PaymentInfo">PaymentInfo</a>.
     * Must not be assigned to another Order or active Cart already.</p>
     *

     * @return null|PaymentResourceIdentifier
     */
    public function getPayment();

    /**
     * @param ?PaymentResourceIdentifier $payment
     */
    public function setPayment(?PaymentResourceIdentifier $payment): void;
}
