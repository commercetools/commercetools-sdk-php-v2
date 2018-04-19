<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\State\StateReference;

interface OrderStateTransitionMessage extends Message
{
    const FIELD_STATE = 'state';
    const FIELD_FORCE = 'force';

    /**
     * @return StateReference
     */
    public function getState();

    /**
     * @return mixed
     */
    public function getForce();

    /**
     * @param StateReference $state
     * @return $this
     */
    public function setState(StateReference $state);

    /**
     * @param mixed $force
     * @return $this
     */
    public function setForce($force);

}
