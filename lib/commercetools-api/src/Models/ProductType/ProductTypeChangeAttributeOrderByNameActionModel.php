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


final class ProductTypeChangeAttributeOrderByNameActionModel extends JsonObjectModel implements ProductTypeChangeAttributeOrderByNameAction
{
    const DISCRIMINATOR_VALUE = 'changeAttributeOrderByName';
    public function __construct(
        string $action = null,
        array $attributeNames = null
    ) {
        $this->action = $action;
        $this->attributeNames = $attributeNames;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?array
     */
    protected $attributeNames;

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
     * @return array|null
     */
    final public function getAttributeNames()
    {
       if (is_null($this->attributeNames)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(ProductTypeChangeAttributeOrderByNameAction::FIELD_ATTRIBUTE_NAMES);
           if (is_null($data)) {
               return null;
           }
           $this->attributeNames = $data;
       }
       return $this->attributeNames;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setAttributeNames(?array $attributeNames): void
    {
        $this->attributeNames = $attributeNames;
    }
    
}