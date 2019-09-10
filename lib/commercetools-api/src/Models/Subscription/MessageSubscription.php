<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;

interface MessageSubscription extends JsonObject
{
    
    const FIELD_RESOURCE_TYPE_ID = 'resourceTypeId';
    const FIELD_TYPES = 'types';

    /**
     *
     * @return string|null
     */
    public function getResourceTypeId();
    
    /**
     *
     * @return array|null
     */
    public function getTypes();
    public function setResourceTypeId(?string $resourceTypeId): void;
    
    public function setTypes(?array $types): void;
}