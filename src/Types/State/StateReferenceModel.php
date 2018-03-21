<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class StateReferenceModel extends ReferenceModel implements StateReference {
    const DISCRIMINATOR_VALUE = 'state';

    /**
     * @var State
     */
    protected $obj;

    /**
     * @return State
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(StateReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(State::class, null);
            }
            $value = $this->mapData(State::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param State $obj
     * @return $this
     */
    public function setObj(State $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
