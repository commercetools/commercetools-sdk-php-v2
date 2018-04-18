<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ZoneUpdateCollectionModel extends UpdateCollectionModel implements ZoneUpdateCollection {

    /**
     * @param ZoneUpdate $value
     * @return ZoneUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof ZoneUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ZoneUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ZoneUpdate) {
            $data = $this->mapData(ZoneUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
