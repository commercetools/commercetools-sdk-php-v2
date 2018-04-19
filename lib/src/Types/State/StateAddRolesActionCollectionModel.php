<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class StateAddRolesActionCollectionModel extends StateUpdateActionCollectionModel implements StateAddRolesActionCollection
{

    /**
     * @param StateAddRolesAction $value
     * @return StateAddRolesActionCollection
     */
    public function add($value) {
        if (!$value instanceof StateAddRolesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return StateAddRolesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof StateAddRolesAction) {
            $data = $this->mapData(StateAddRolesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
