<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ZoneReferenceCollectionModel extends ReferenceCollectionModel implements ZoneReferenceCollection
{

    /**
     * @param ZoneReference $value
     * @return ZoneReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof ZoneReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ZoneReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ZoneReference) {
            $data = $this->mapData(ZoneReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
