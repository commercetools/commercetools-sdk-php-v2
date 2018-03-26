<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Base\JsonCollection;

class ZoneUpdateActionCollectionModel extends JsonCollection implements ZoneUpdateActionCollection {

    /**
     * @param ZoneUpdateAction $value
     * @return ZoneUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof ZoneUpdateAction) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ZoneUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ZoneUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(ZoneUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
