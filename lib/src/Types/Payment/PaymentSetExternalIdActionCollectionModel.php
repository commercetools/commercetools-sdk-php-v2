<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentSetExternalIdActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentSetExternalIdActionCollection
{

    /**
     * @param PaymentSetExternalIdAction $value
     * @return PaymentSetExternalIdActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentSetExternalIdAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentSetExternalIdAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentSetExternalIdAction) {
            $data = $this->mapData(PaymentSetExternalIdAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
