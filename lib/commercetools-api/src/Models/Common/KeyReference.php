<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Store\StoreKeyReference;

interface KeyReference extends JsonObject
{
    const DISCRIMINATOR_FIELD = 'typeId';
    const FIELD_TYPE_ID = 'typeId';
    const FIELD_KEY = 'key';

    /**
     *
     * @return string|null
     */
    public function getTypeId();
    
    /**
     *
     * @return string|null
     */
    public function getKey();
    public function setTypeId(?string $typeId): void;
    
    public function setKey(?string $key): void;
}