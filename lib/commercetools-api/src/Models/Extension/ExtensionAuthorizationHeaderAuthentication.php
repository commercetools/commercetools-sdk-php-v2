<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObject;

interface ExtensionAuthorizationHeaderAuthentication extends ExtensionHttpDestinationAuthentication
{
    
    const FIELD_HEADER_VALUE = 'headerValue';

    /**
     *
     * @return string|null
     */
    public function getHeaderValue();
    public function setHeaderValue(?string $headerValue): void;
}