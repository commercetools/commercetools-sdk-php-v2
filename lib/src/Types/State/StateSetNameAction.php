<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\Common\LocalizedString;

interface StateSetNameAction extends StateUpdateAction
{
    const FIELD_NAME = 'name';

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

}
