<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

interface StateChangeTypeAction extends StateUpdateAction
{
    const FIELD_TYPE = 'type';

    /**
     * @return string
     */
    public function getType();

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type);

}
