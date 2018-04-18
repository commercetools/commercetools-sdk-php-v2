<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\Zone\ZoneUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ZoneAddLocationActionCollectionModel extends ZoneUpdateActionCollectionModel implements ZoneAddLocationActionCollection {

    /**
     * @param ZoneAddLocationAction $value
     * @return ZoneAddLocationActionCollection
     */
    public function add($value) {
        if (!$value instanceof ZoneAddLocationAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ZoneAddLocationAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ZoneAddLocationAction) {
            $data = $this->mapData(ZoneAddLocationAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
