<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ProductTypeChangeAttributeOrderActionModel extends JsonObjectModel implements ProductTypeChangeAttributeOrderAction
{
    const DISCRIMINATOR_VALUE = 'changeAttributeOrder';
    public function __construct(
        string $action = null,
        AttributeDefinitionCollection $attributes = null
    ) {
        $this->action = $action;
        $this->attributes = $attributes;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?AttributeDefinitionCollection
     */
    protected $attributes;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductTypeUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return AttributeDefinitionCollection|null
     */
    final public function getAttributes()
    {
       if (is_null($this->attributes)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductTypeChangeAttributeOrderAction::FIELD_ATTRIBUTES);
           if (is_null($data)) {
               return null;
           }
           $this->attributes = AttributeDefinitionCollection::fromArray($data);
       }
       return $this->attributes;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setAttributes(?AttributeDefinitionCollection $attributes): void
    {
        $this->attributes = $attributes;
    }
    
}