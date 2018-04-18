<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class StateUpdateCollectionModel extends UpdateCollectionModel implements StateUpdateCollection {

    /**
     * @param StateUpdate $value
     * @return StateUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof StateUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return StateUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof StateUpdate) {
            $data = $this->mapData(StateUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
