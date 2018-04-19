<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

interface StateChangeInitialAction extends StateUpdateAction
{
    const FIELD_INITIAL = 'initial';

    /**
     * @return mixed
     */
    public function getInitial();

    /**
     * @param mixed $initial
     * @return $this
     */
    public function setInitial($initial);

}
