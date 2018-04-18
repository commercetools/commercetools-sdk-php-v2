<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class PaymentDraftCollectionModel extends JsonCollection implements PaymentDraftCollection {

    /**
     * @param PaymentDraft $value
     * @return PaymentDraftCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentDraft) {
            $data = $this->mapData(PaymentDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
