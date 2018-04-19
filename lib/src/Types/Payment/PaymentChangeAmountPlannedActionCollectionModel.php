<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentChangeAmountPlannedActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentChangeAmountPlannedActionCollection
{

    /**
     * @param PaymentChangeAmountPlannedAction $value
     * @return PaymentChangeAmountPlannedActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentChangeAmountPlannedAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentChangeAmountPlannedAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentChangeAmountPlannedAction) {
            $data = $this->mapData(PaymentChangeAmountPlannedAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
