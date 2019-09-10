<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObject;

interface ExtensionChangeDestinationAction extends ExtensionUpdateAction
{
    
    const FIELD_DESTINATION = 'destination';

    /**
     *
     * @return ExtensionDestination|null
     */
    public function getDestination();
    public function setDestination(?ExtensionDestination $destination): void;
}