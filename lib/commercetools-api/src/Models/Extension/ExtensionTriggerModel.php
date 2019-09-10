<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ExtensionTriggerModel extends JsonObjectModel implements ExtensionTrigger
{
    
    public function __construct(
        string $resourceTypeId = null,
        array $actions = null
    ) {
        $this->resourceTypeId = $resourceTypeId;
        $this->actions = $actions;
        
    }

    /**
     * @var ?string
     */
    protected $resourceTypeId;
    
    /**
     * @var ?array
     */
    protected $actions;

    /**
     *
     * @return string|null
     */
    final public function getResourceTypeId()
    {
       if (is_null($this->resourceTypeId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ExtensionTrigger::FIELD_RESOURCE_TYPE_ID);
           if (is_null($data)) {
               return null;
           }
           $this->resourceTypeId = (string)$data;
       }
       return $this->resourceTypeId;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getActions()
    {
       if (is_null($this->actions)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(ExtensionTrigger::FIELD_ACTIONS);
           if (is_null($data)) {
               return null;
           }
           $this->actions = $data;
       }
       return $this->actions;
    }
    final public function setResourceTypeId(?string $resourceTypeId): void
    {
        $this->resourceTypeId = $resourceTypeId;
    }
    
    final public function setActions(?array $actions): void
    {
        $this->actions = $actions;
    }
    
}