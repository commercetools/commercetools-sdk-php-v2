<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class StateReferenceCollectionModel extends ReferenceCollectionModel implements StateReferenceCollection {

    /**
     * @param StateReference $value
     * @return StateReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof StateReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return StateReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof StateReference) {
            $data = $this->mapData(StateReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
