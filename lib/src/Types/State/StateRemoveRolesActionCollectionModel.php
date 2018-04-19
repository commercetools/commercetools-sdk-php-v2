<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class StateRemoveRolesActionCollectionModel extends StateUpdateActionCollectionModel implements StateRemoveRolesActionCollection
{

    /**
     * @param StateRemoveRolesAction $value
     * @return StateRemoveRolesActionCollection
     */
    public function add($value) {
        if (!$value instanceof StateRemoveRolesAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return StateRemoveRolesAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof StateRemoveRolesAction) {
            $data = $this->mapData(StateRemoveRolesAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
