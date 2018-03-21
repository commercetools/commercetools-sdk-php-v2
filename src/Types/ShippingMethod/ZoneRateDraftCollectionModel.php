<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\JsonCollection;

class ZoneRateDraftCollectionModel extends JsonCollection implements ZoneRateDraftCollection {

    /**
     * @param ZoneRateDraft $value
     * @return ZoneRateDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ZoneRateDraft) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ZoneRateDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ZoneRateDraft) {
            $data = $this->mapData(ZoneRateDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
