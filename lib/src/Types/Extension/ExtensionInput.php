<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\Reference;

interface ExtensionInput extends JsonObject
{
    const FIELD_ACTION = 'action';
    const FIELD_RESOURCE = 'resource';

    /**
     * @return string
     */
    public function getAction();

    /**
     * @return Reference
     */
    public function getResource();

    /**
     * @param string $action
     * @return $this
     */
    public function setAction(string $action);

    /**
     * @param Reference $resource
     * @return $this
     */
    public function setResource(Reference $resource);

}
