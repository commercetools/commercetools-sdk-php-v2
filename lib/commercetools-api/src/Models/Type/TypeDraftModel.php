<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;

final class TypeDraftModel extends JsonObjectModel implements TypeDraft
{
    
    public function __construct(
        LocalizedString $name = null,
        FieldDefinitionCollection $fieldDefinitions = null,
        LocalizedString $description = null,
        string $key = null,
        array $resourceTypeIds = null
    ) {
        $this->name = $name;
        $this->fieldDefinitions = $fieldDefinitions;
        $this->description = $description;
        $this->key = $key;
        $this->resourceTypeIds = $resourceTypeIds;
        
    }

    /**
     * @var ?LocalizedString
     */
    protected $name;
    
    /**
     * @var ?FieldDefinitionCollection
     */
    protected $fieldDefinitions;
    
    /**
     * @var ?LocalizedString
     */
    protected $description;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?array
     */
    protected $resourceTypeIds;

    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(TypeDraft::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           
           $this->name = LocalizedStringModel::of($data);
       }
       return $this->name;
    }
    
    /**
     *
     * @return FieldDefinitionCollection|null
     */
    final public function getFieldDefinitions()
    {
       if (is_null($this->fieldDefinitions)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(TypeDraft::FIELD_FIELD_DEFINITIONS);
           if (is_null($data)) {
               return null;
           }
           $this->fieldDefinitions = FieldDefinitionCollection::fromArray($data);
       }
       return $this->fieldDefinitions;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getDescription()
    {
       if (is_null($this->description)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(TypeDraft::FIELD_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->description = LocalizedStringModel::of($data);
       }
       return $this->description;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(TypeDraft::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getResourceTypeIds()
    {
       if (is_null($this->resourceTypeIds)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(TypeDraft::FIELD_RESOURCE_TYPE_IDS);
           if (is_null($data)) {
               return null;
           }
           $this->resourceTypeIds = $data;
       }
       return $this->resourceTypeIds;
    }
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setFieldDefinitions(?FieldDefinitionCollection $fieldDefinitions): void
    {
        $this->fieldDefinitions = $fieldDefinitions;
    }
    
    final public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
    final public function setResourceTypeIds(?array $resourceTypeIds): void
    {
        $this->resourceTypeIds = $resourceTypeIds;
    }
    
}