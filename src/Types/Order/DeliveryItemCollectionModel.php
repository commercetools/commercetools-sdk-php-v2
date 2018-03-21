<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;

class DeliveryItemCollectionModel extends JsonCollection implements DeliveryItemCollection {

    /**
     * @param DeliveryItem $value
     * @return DeliveryItemCollection
     */
    public function add($value) {
        if (!$value instanceof DeliveryItem) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DeliveryItem
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DeliveryItem) {
            $data = $this->mapData(DeliveryItem::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
