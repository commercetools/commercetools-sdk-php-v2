<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types;

use Commercetools\Base\JsonObject;

interface UpdateAction extends JsonObject
{
    const FIELD_ACTION = 'action';

    /**
     * @return string
     */
    public function getAction();

    /**
     * @param string $action
     * @return $this
     */
    public function setAction(string $action);

}
