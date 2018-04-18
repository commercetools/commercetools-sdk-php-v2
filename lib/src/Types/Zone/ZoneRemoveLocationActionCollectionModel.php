<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\Zone\ZoneUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ZoneRemoveLocationActionCollectionModel extends ZoneUpdateActionCollectionModel implements ZoneRemoveLocationActionCollection {

    /**
     * @param ZoneRemoveLocationAction $value
     * @return ZoneRemoveLocationActionCollection
     */
    public function add($value) {
        if (!$value instanceof ZoneRemoveLocationAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ZoneRemoveLocationAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ZoneRemoveLocationAction) {
            $data = $this->mapData(ZoneRemoveLocationAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
