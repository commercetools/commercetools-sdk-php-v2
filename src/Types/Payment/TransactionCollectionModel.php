<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Base\JsonCollection;

class TransactionCollectionModel extends JsonCollection implements TransactionCollection {

    /**
     * @param Transaction $value
     * @return TransactionCollection
     */
    public function add($value) {
        if (!$value instanceof Transaction) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Transaction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Transaction) {
            $data = $this->mapData(Transaction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
