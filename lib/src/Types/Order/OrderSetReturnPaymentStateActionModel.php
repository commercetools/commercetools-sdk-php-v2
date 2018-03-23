<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionModel;

class OrderSetReturnPaymentStateActionModel extends OrderUpdateActionModel implements OrderSetReturnPaymentStateAction {
    const DISCRIMINATOR_VALUE = 'setReturnPaymentState';

    /**
     * @var string
     */
    protected $paymentState;
    /**
     * @var string
     */
    protected $returnItemId;

    /**
     * @return string
     */
    public function getPaymentState()
    {
        if (is_null($this->paymentState)) {
            $value = $this->raw(OrderSetReturnPaymentStateAction::FIELD_PAYMENT_STATE);
            $value = (string)$value;
            $this->paymentState = $value;
        }
        return $this->paymentState;
    }
    /**
     * @return string
     */
    public function getReturnItemId()
    {
        if (is_null($this->returnItemId)) {
            $value = $this->raw(OrderSetReturnPaymentStateAction::FIELD_RETURN_ITEM_ID);
            $value = (string)$value;
            $this->returnItemId = $value;
        }
        return $this->returnItemId;
    }

    /**
     * @param string $paymentState
     * @return $this
     */
    public function setPaymentState(string $paymentState)
    {
        $this->paymentState = (string)$paymentState;

        return $this;
    }
    /**
     * @param string $returnItemId
     * @return $this
     */
    public function setReturnItemId(string $returnItemId)
    {
        $this->returnItemId = (string)$returnItemId;

        return $this;
    }

}
