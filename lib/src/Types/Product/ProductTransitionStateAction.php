<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\State\State;

interface ProductTransitionStateAction extends ProductUpdateAction {
    const FIELD_STATE = 'state';
    const FIELD_FORCE = 'force';

    /**
     * @return State
     */
    public function getState();

    /**
     * @return mixed
     */
    public function getForce();

    /**
     * @param State $state
     * @return $this
     */
    public function setState(State $state);

    /**
     * @param mixed $force
     * @return $this
     */
    public function setForce($force);

}
