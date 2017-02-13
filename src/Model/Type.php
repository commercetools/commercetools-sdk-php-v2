<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class Type extends Resource {
    protected $key;
    protected $name;
    protected $description;
    protected $resourceTypeIds;
    protected $fieldDefinitions;

    /**
     * @return string
     */
    public function getKey(): string
    {
        if (is_null($this->key)) {
            $value = $this->raw('key');
            if (!is_null($value)) {
                $this->key = (string)$value;
            } else {
                return '';
            }
        }
        return $this->key;
    }
                

    /**
     * @return LocalizedString
     */
    public function getName(): LocalizedString
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->name;
    }
                

    /**
     * @return LocalizedString
     */
    public function getDescription(): LocalizedString
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->description;
    }
                

    /**
     * @return array
     */
    public function getResourceTypeIds(): array
    {
        if (is_null($this->resourceTypeIds)) {
            $value = $this->raw('resourceTypeIds');
            if (!is_null($value)) {
                $this->resourceTypeIds = $value;
            } else {
                return [];
            }
        }
        return $this->resourceTypeIds;
    }
                

    /**
     * @return FieldDefinitionCollection
     */
    public function getFieldDefinitions(): FieldDefinitionCollection
    {
        if (is_null($this->fieldDefinitions)) {
            $value = $this->raw('fieldDefinitions');
            if (!is_null($value)) {
                $this->fieldDefinitions = Mapper::map($value, FieldDefinitionCollection::class);
            } else {
                return Mapper::map([], FieldDefinitionCollection::class);
            }
        }
        return $this->fieldDefinitions;
    }
                
}
