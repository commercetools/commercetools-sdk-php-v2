<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class StateSetTransitionsActionCollectionModel extends StateUpdateActionCollectionModel implements StateSetTransitionsActionCollection {

    /**
     * @param StateSetTransitionsAction $value
     * @return StateSetTransitionsActionCollection
     */
    public function add($value) {
        if (!$value instanceof StateSetTransitionsAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return StateSetTransitionsAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof StateSetTransitionsAction) {
            $data = $this->mapData(StateSetTransitionsAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
