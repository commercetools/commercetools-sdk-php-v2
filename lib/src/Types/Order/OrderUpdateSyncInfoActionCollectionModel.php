<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderUpdateSyncInfoActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderUpdateSyncInfoActionCollection
{

    /**
     * @param OrderUpdateSyncInfoAction $value
     * @return OrderUpdateSyncInfoActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderUpdateSyncInfoAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderUpdateSyncInfoAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderUpdateSyncInfoAction) {
            $data = $this->mapData(OrderUpdateSyncInfoAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
