<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;
use Commercetools\Base\DiscriminatorResolver;


class OrderUpdateActionCollectionModel extends JsonCollection implements OrderUpdateActionCollection {

    /**
     * @param OrderUpdateAction $value
     * @return OrderUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderUpdateAction) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(OrderUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
