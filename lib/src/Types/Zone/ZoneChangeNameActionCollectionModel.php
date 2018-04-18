<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\Zone\ZoneUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ZoneChangeNameActionCollectionModel extends ZoneUpdateActionCollectionModel implements ZoneChangeNameActionCollection {

    /**
     * @param ZoneChangeNameAction $value
     * @return ZoneChangeNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof ZoneChangeNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ZoneChangeNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ZoneChangeNameAction) {
            $data = $this->mapData(ZoneChangeNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
