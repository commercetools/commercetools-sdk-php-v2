<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements PaymentPagedQueryResponseCollection {

    /**
     * @param PaymentPagedQueryResponse $value
     * @return PaymentPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentPagedQueryResponse) {
            $data = $this->mapData(PaymentPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
