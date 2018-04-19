<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Me;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class MyCustomerDraftCollectionModel extends JsonCollection implements MyCustomerDraftCollection
{

    /**
     * @param MyCustomerDraft $value
     * @return MyCustomerDraftCollection
     */
    public function add($value) {
        if (!$value instanceof MyCustomerDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return MyCustomerDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof MyCustomerDraft) {
            $data = $this->mapData(MyCustomerDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
