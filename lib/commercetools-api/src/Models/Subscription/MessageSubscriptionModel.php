<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class MessageSubscriptionModel extends JsonObjectModel implements MessageSubscription
{
    
    public function __construct(
        array $types = null,
        string $resourceTypeId = null
    ) {
        $this->types = $types;
        $this->resourceTypeId = $resourceTypeId;
        
    }

    /**
     * @var ?array
     */
    protected $types;
    
    /**
     * @var ?string
     */
    protected $resourceTypeId;

    /**
     *
     * @return array|null
     */
    final public function getTypes()
    {
       if (is_null($this->types)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(MessageSubscription::FIELD_TYPES);
           if (is_null($data)) {
               return null;
           }
           $this->types = $data;
       }
       return $this->types;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getResourceTypeId()
    {
       if (is_null($this->resourceTypeId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MessageSubscription::FIELD_RESOURCE_TYPE_ID);
           if (is_null($data)) {
               return null;
           }
           $this->resourceTypeId = (string)$data;
       }
       return $this->resourceTypeId;
    }
    final public function setTypes(?array $types): void
    {
        $this->types = $types;
    }
    
    final public function setResourceTypeId(?string $resourceTypeId): void
    {
        $this->resourceTypeId = $resourceTypeId;
    }
    
}