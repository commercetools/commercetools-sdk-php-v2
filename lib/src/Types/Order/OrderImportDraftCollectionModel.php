<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class OrderImportDraftCollectionModel extends JsonCollection implements OrderImportDraftCollection {

    /**
     * @param OrderImportDraft $value
     * @return OrderImportDraftCollection
     */
    public function add($value) {
        if (!$value instanceof OrderImportDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderImportDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderImportDraft) {
            $data = $this->mapData(OrderImportDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
