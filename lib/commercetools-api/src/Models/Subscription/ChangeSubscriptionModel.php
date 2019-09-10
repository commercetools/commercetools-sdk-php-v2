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


final class ChangeSubscriptionModel extends JsonObjectModel implements ChangeSubscription
{
    
    public function __construct(
        string $resourceTypeId = null
    ) {
        $this->resourceTypeId = $resourceTypeId;
        
    }

    /**
     * @var ?string
     */
    protected $resourceTypeId;

    /**
     *
     * @return string|null
     */
    final public function getResourceTypeId()
    {
       if (is_null($this->resourceTypeId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ChangeSubscription::FIELD_RESOURCE_TYPE_ID);
           if (is_null($data)) {
               return null;
           }
           $this->resourceTypeId = (string)$data;
       }
       return $this->resourceTypeId;
    }
    final public function setResourceTypeId(?string $resourceTypeId): void
    {
        $this->resourceTypeId = $resourceTypeId;
    }
    
}