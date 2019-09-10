<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObject;

interface ExtensionHttpDestination extends ExtensionDestination
{
    
    const FIELD_URL = 'url';
    const FIELD_AUTHENTICATION = 'authentication';

    /**
     *
     * @return string|null
     */
    public function getUrl();
    
    /**
     *
     * @return ExtensionHttpDestinationAuthentication|null
     */
    public function getAuthentication();
    public function setUrl(?string $url): void;
    
    public function setAuthentication(?ExtensionHttpDestinationAuthentication $authentication): void;
}