<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentAddTransactionActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentAddTransactionActionCollection
{

    /**
     * @param PaymentAddTransactionAction $value
     * @return PaymentAddTransactionActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentAddTransactionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentAddTransactionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentAddTransactionAction) {
            $data = $this->mapData(PaymentAddTransactionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
