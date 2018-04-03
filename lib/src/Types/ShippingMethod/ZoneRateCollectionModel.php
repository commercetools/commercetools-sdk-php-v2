<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ZoneRateCollectionModel extends JsonCollection implements ZoneRateCollection {

    /**
     * @param ZoneRate $value
     * @return ZoneRateCollection
     */
    public function add($value) {
        if (!$value instanceof ZoneRate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ZoneRate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ZoneRate) {
            $data = $this->mapData(ZoneRate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
