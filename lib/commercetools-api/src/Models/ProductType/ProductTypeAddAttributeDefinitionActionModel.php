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


final class ProductTypeAddAttributeDefinitionActionModel extends JsonObjectModel implements ProductTypeAddAttributeDefinitionAction
{
    const DISCRIMINATOR_VALUE = 'addAttributeDefinition';
    public function __construct(
        string $action = null,
        AttributeDefinitionDraft $attribute = null
    ) {
        $this->action = $action;
        $this->attribute = $attribute;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?AttributeDefinitionDraft
     */
    protected $attribute;

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
     * @return AttributeDefinitionDraft|null
     */
    final public function getAttribute()
    {
       if (is_null($this->attribute)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductTypeAddAttributeDefinitionAction::FIELD_ATTRIBUTE);
           if (is_null($data)) {
               return null;
           }
           
           $this->attribute = AttributeDefinitionDraftModel::of($data);
       }
       return $this->attribute;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setAttribute(?AttributeDefinitionDraft $attribute): void
    {
        $this->attribute = $attribute;
    }
    
}