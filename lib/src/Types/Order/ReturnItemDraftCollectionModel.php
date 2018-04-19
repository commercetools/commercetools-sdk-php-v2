<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ReturnItemDraftCollectionModel extends JsonCollection implements ReturnItemDraftCollection
{

    /**
     * @param ReturnItemDraft $value
     * @return ReturnItemDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ReturnItemDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ReturnItemDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ReturnItemDraft) {
            $data = $this->mapData(ReturnItemDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
