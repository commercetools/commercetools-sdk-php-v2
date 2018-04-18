<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class StateChangeTypeActionCollectionModel extends StateUpdateActionCollectionModel implements StateChangeTypeActionCollection {

    /**
     * @param StateChangeTypeAction $value
     * @return StateChangeTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof StateChangeTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return StateChangeTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof StateChangeTypeAction) {
            $data = $this->mapData(StateChangeTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
