<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class StateChangeInitialActionCollectionModel extends StateUpdateActionCollectionModel implements StateChangeInitialActionCollection
{

    /**
     * @param StateChangeInitialAction $value
     * @return StateChangeInitialActionCollection
     */
    public function add($value) {
        if (!$value instanceof StateChangeInitialAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return StateChangeInitialAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof StateChangeInitialAction) {
            $data = $this->mapData(StateChangeInitialAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
