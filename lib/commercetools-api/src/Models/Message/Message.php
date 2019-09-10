<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\Reference;

interface Message extends BaseResource
{
    
    const FIELD_SEQUENCE_NUMBER = 'sequenceNumber';
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESOURCE_VERSION = 'resourceVersion';
    const FIELD_TYPE = 'type';
    const FIELD_RESOURCE_USER_PROVIDED_IDENTIFIERS = 'resourceUserProvidedIdentifiers';

    /**
     *
     * @return int|null
     */
    public function getSequenceNumber();
    
    /**
     *
     * @return Reference|null
     */
    public function getResource();
    
    /**
     *
     * @return int|null
     */
    public function getResourceVersion();
    
    /**
     *
     * @return string|null
     */
    public function getType();
    
    /**
     *
     * @return UserProvidedIdentifiers|null
     */
    public function getResourceUserProvidedIdentifiers();
    public function setSequenceNumber(?int $sequenceNumber): void;
    
    public function setResource(?Reference $resource): void;
    
    public function setResourceVersion(?int $resourceVersion): void;
    
    public function setType(?string $type): void;
    
    public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void;
}