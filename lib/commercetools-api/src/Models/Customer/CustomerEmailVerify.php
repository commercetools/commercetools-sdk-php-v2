<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;

interface CustomerEmailVerify extends JsonObject
{
    
    const FIELD_VERSION = 'version';
    const FIELD_TOKEN_VALUE = 'tokenValue';

    /**
     *
     * @return int|null
     */
    public function getVersion();
    
    /**
     *
     * @return string|null
     */
    public function getTokenValue();
    public function setVersion(?int $version): void;
    
    public function setTokenValue(?string $tokenValue): void;
}