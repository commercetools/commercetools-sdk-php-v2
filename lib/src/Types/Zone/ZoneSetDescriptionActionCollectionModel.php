<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\Zone\ZoneUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ZoneSetDescriptionActionCollectionModel extends ZoneUpdateActionCollectionModel implements ZoneSetDescriptionActionCollection
{

    /**
     * @param ZoneSetDescriptionAction $value
     * @return ZoneSetDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof ZoneSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ZoneSetDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ZoneSetDescriptionAction) {
            $data = $this->mapData(ZoneSetDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
