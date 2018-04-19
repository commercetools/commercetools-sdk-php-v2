<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class OrderFromCartDraftCollectionModel extends JsonCollection implements OrderFromCartDraftCollection
{

    /**
     * @param OrderFromCartDraft $value
     * @return OrderFromCartDraftCollection
     */
    public function add($value) {
        if (!$value instanceof OrderFromCartDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderFromCartDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderFromCartDraft) {
            $data = $this->mapData(OrderFromCartDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
