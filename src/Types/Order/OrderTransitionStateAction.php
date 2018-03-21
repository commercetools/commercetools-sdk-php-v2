<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Common\ResourceIdentifier;

interface OrderTransitionStateAction extends OrderUpdateAction {
    const FIELD_STATE = 'state';
    const FIELD_FORCE = 'force';

    /**
     * @return ResourceIdentifier
     */
    public function getState();

    /**
     * @return mixed
     */
    public function getForce();

    /**
     * @param ResourceIdentifier $state
     * @return $this
     */
    public function setState(ResourceIdentifier $state);

    /**
     * @param mixed $force
     * @return $this
     */
    public function setForce($force);

}
