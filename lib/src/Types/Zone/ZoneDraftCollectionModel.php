<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ZoneDraftCollectionModel extends JsonCollection implements ZoneDraftCollection
{

    /**
     * @param ZoneDraft $value
     * @return ZoneDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ZoneDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ZoneDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ZoneDraft) {
            $data = $this->mapData(ZoneDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
