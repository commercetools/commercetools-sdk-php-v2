<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\State\StateUpdateActionModel;

class StateChangeTypeActionModel extends StateUpdateActionModel implements StateChangeTypeAction
{
    const DISCRIMINATOR_VALUE = 'changeType';

    /**
     * @var string
     */
    protected $type;

    /**
     * @return string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(StateChangeTypeAction::FIELD_TYPE);
            $value = (string)$value;
            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type)
    {
        $this->type = (string)$type;

        return $this;
    }

}
