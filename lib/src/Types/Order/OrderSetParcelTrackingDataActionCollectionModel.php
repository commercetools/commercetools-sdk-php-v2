<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetParcelTrackingDataActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetParcelTrackingDataActionCollection
{

    /**
     * @param OrderSetParcelTrackingDataAction $value
     * @return OrderSetParcelTrackingDataActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetParcelTrackingDataAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetParcelTrackingDataAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetParcelTrackingDataAction) {
            $data = $this->mapData(OrderSetParcelTrackingDataAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
