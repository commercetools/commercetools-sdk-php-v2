<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LoggedResource;

interface Extension extends LoggedResource
{
    
    const FIELD_KEY = 'key';
    const FIELD_DESTINATION = 'destination';
    const FIELD_TRIGGERS = 'triggers';
    const FIELD_TIMEOUT_IN_MS = 'timeoutInMs';

    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return ExtensionDestination|null
     */
    public function getDestination();
    
    /**
     *
     * @return ExtensionTriggerCollection|null
     */
    public function getTriggers();
    
    /**
     *
     * @return int|null
     */
    public function getTimeoutInMs();
    public function setKey(?string $key): void;
    
    public function setDestination(?ExtensionDestination $destination): void;
    
    public function setTriggers(?ExtensionTriggerCollection $triggers): void;
    
    public function setTimeoutInMs(?int $timeoutInMs): void;
}