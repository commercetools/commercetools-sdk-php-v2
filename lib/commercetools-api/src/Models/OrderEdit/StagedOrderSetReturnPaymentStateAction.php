<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetReturnPaymentStateAction extends StagedOrderUpdateAction
{
    
    const FIELD_RETURN_ITEM_ID = 'returnItemId';
    const FIELD_PAYMENT_STATE = 'paymentState';

    /**
     *
     * @return string|null
     */
    public function getReturnItemId();
    
    /**
     *
     * @return string|null
     */
    public function getPaymentState();
    public function setReturnItemId(?string $returnItemId): void;
    
    public function setPaymentState(?string $paymentState): void;
}