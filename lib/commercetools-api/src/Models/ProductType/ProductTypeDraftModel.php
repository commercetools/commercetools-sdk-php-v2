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


final class ProductTypeDraftModel extends JsonObjectModel implements ProductTypeDraft
{
    
    public function __construct(
        string $name = null,
        string $description = null,
        AttributeDefinitionDraftCollection $attributes = null,
        string $key = null
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->attributes = $attributes;
        $this->key = $key;
        
    }

    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $description;
    
    /**
     * @var ?AttributeDefinitionDraftCollection
     */
    protected $attributes;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductTypeDraft::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->name = (string)$data;
       }
       return $this->name;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDescription()
    {
       if (is_null($this->description)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductTypeDraft::FIELD_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           $this->description = (string)$data;
       }
       return $this->description;
    }
    
    /**
     *
     * @return AttributeDefinitionDraftCollection|null
     */
    final public function getAttributes()
    {
       if (is_null($this->attributes)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductTypeDraft::FIELD_ATTRIBUTES);
           if (is_null($data)) {
               return null;
           }
           $this->attributes = AttributeDefinitionDraftCollection::fromArray($data);
       }
       return $this->attributes;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductTypeDraft::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setName(?string $name): void
    {
        $this->name = $name;
    }
    
    final public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    
    final public function setAttributes(?AttributeDefinitionDraftCollection $attributes): void
    {
        $this->attributes = $attributes;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
}