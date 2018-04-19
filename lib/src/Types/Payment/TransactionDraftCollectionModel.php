<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class TransactionDraftCollectionModel extends JsonCollection implements TransactionDraftCollection
{

    /**
     * @param TransactionDraft $value
     * @return TransactionDraftCollection
     */
    public function add($value) {
        if (!$value instanceof TransactionDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TransactionDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TransactionDraft) {
            $data = $this->mapData(TransactionDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
