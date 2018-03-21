<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

interface OrderSetReturnPaymentStateAction extends OrderUpdateAction {
    const FIELD_PAYMENT_STATE = 'paymentState';
    const FIELD_RETURN_ITEM_ID = 'returnItemId';

    /**
     * @return string
     */
    public function getPaymentState();

    /**
     * @return string
     */
    public function getReturnItemId();

    /**
     * @param string $paymentState
     * @return $this
     */
    public function setPaymentState(string $paymentState);

    /**
     * @param string $returnItemId
     * @return $this
     */
    public function setReturnItemId(string $returnItemId);

}
