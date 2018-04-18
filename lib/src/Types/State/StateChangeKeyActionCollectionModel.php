<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class StateChangeKeyActionCollectionModel extends StateUpdateActionCollectionModel implements StateChangeKeyActionCollection {

    /**
     * @param StateChangeKeyAction $value
     * @return StateChangeKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof StateChangeKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return StateChangeKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof StateChangeKeyAction) {
            $data = $this->mapData(StateChangeKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
