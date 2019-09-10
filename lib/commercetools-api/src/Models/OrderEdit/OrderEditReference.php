<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Reference;

interface OrderEditReference extends Reference
{
    
    const FIELD_OBJ = 'obj';

    /**
     *
     * @return OrderEdit|null
     */
    public function getObj();
    public function setObj(?OrderEdit $obj): void;
}