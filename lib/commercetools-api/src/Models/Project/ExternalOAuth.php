<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;

interface ExternalOAuth extends JsonObject
{
    
    const FIELD_URL = 'url';
    const FIELD_AUTHORIZATION_HEADER = 'authorizationHeader';

    /**
     *
     * @return string|null
     */
    public function getUrl();
    
    /**
     *
     * @return string|null
     */
    public function getAuthorizationHeader();
    public function setUrl(?string $url): void;
    
    public function setAuthorizationHeader(?string $authorizationHeader): void;
}