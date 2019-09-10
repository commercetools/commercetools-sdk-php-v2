<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\State;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Reference;

interface StateReference extends Reference
{
    
    const FIELD_OBJ = 'obj';

    /**
     *
     * @return State|null
     */
    public function getObj();
    public function setObj(?State $obj): void;
}