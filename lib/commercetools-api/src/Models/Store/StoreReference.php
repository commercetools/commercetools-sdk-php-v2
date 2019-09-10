<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Store;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Reference;

interface StoreReference extends Reference
{
    
    const FIELD_OBJ = 'obj';

    /**
     *
     * @return Store|null
     */
    public function getObj();
    public function setObj(?Store $obj): void;
}