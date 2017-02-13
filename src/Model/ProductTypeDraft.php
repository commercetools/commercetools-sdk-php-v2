<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeDraft extends JsonObject {
    protected $key;
    protected $name;
    protected $description;
    protected $attributes;

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
     * @return string
     */
    public function getName(): string
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = (string)$value;
            } else {
                return '';
            }
        }
        return $this->name;
    }
                

    /**
     * @return string
     */
    public function getDescription(): string
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = (string)$value;
            } else {
                return '';
            }
        }
        return $this->description;
    }
                

    /**
     * @return AttributeDefinitionCollection
     */
    public function getAttributes(): AttributeDefinitionCollection
    {
        if (is_null($this->attributes)) {
            $value = $this->raw('attributes');
            if (!is_null($value)) {
                $this->attributes = Mapper::map($value, AttributeDefinitionCollection::class);
            } else {
                return Mapper::map([], AttributeDefinitionCollection::class);
            }
        }
        return $this->attributes;
    }
                
}
