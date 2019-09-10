<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Reference;

interface ExtensionInput extends JsonObject
{
    
    const FIELD_ACTION = 'action';
    const FIELD_RESOURCE = 'resource';

    /**
     *
     * @return string|null
     */
    public function getAction();
    
    /**
     *
     * @return Reference|null
     */
    public function getResource();
    public function setAction(?string $action): void;
    
    public function setResource(?Reference $resource): void;
}