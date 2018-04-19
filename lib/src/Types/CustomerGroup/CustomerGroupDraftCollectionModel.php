<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CustomerGroupDraftCollectionModel extends JsonCollection implements CustomerGroupDraftCollection
{

    /**
     * @param CustomerGroupDraft $value
     * @return CustomerGroupDraftCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerGroupDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerGroupDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerGroupDraft) {
            $data = $this->mapData(CustomerGroupDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
