<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class StateSetNameActionCollectionModel extends StateUpdateActionCollectionModel implements StateSetNameActionCollection {

    /**
     * @param StateSetNameAction $value
     * @return StateSetNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof StateSetNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return StateSetNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof StateSetNameAction) {
            $data = $this->mapData(StateSetNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
