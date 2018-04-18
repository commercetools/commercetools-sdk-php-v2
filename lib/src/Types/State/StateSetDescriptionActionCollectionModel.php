<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class StateSetDescriptionActionCollectionModel extends StateUpdateActionCollectionModel implements StateSetDescriptionActionCollection {

    /**
     * @param StateSetDescriptionAction $value
     * @return StateSetDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof StateSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return StateSetDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof StateSetDescriptionAction) {
            $data = $this->mapData(StateSetDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
