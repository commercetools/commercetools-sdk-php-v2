<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class StateSetRolesActionCollectionModel extends StateUpdateActionCollectionModel implements StateSetRolesActionCollection {

    /**
     * @param StateSetRolesAction $value
     * @return StateSetRolesActionCollection
     */
    public function add($value) {
        if (!$value instanceof StateSetRolesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return StateSetRolesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof StateSetRolesAction) {
            $data = $this->mapData(StateSetRolesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
