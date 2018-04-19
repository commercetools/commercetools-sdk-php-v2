<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentSetAuthorizationActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentSetAuthorizationActionCollection
{

    /**
     * @param PaymentSetAuthorizationAction $value
     * @return PaymentSetAuthorizationActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentSetAuthorizationAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentSetAuthorizationAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentSetAuthorizationAction) {
            $data = $this->mapData(PaymentSetAuthorizationAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
