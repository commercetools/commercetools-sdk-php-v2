<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class DeliveryCollectionModel extends JsonCollection implements DeliveryCollection {

    /**
     * @param Delivery $value
     * @return DeliveryCollection
     */
    public function add($value) {
        if (!$value instanceof Delivery) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Delivery
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Delivery) {
            $data = $this->mapData(Delivery::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
