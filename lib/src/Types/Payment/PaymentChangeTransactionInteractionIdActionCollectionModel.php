<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentChangeTransactionInteractionIdActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentChangeTransactionInteractionIdActionCollection
{

    /**
     * @param PaymentChangeTransactionInteractionIdAction $value
     * @return PaymentChangeTransactionInteractionIdActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentChangeTransactionInteractionIdAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentChangeTransactionInteractionIdAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentChangeTransactionInteractionIdAction) {
            $data = $this->mapData(PaymentChangeTransactionInteractionIdAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
