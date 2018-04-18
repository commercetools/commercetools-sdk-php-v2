<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CustomerDraftCollectionModel extends JsonCollection implements CustomerDraftCollection {

    /**
     * @param CustomerDraft $value
     * @return CustomerDraftCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerDraft) {
            $data = $this->mapData(CustomerDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
