<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\State\StateUpdateActionModel;

class StateChangeInitialActionModel extends StateUpdateActionModel implements StateChangeInitialAction
{
    const DISCRIMINATOR_VALUE = 'changeInitial';

    /**
     * @var mixed
     */
    protected $initial;

    /**
     * @return mixed
     */
    public function getInitial()
    {
        if (is_null($this->initial)) {
            $value = $this->raw(StateChangeInitialAction::FIELD_INITIAL);
            $this->initial = $value;
        }
        return $this->initial;
    }

    /**
     * @param $initial
     * @return $this
     */
    public function setInitial($initial)
    {
        $this->initial = $initial;

        return $this;
    }

}
