<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class ProductTypeDraftModel extends JsonObjectModel implements ProductTypeDraft
{
    /**
     * @var string
     */
    protected $key;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var AttributeDefinitionDraftCollection
     */
    protected $attributes;

    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(ProductTypeDraft::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(ProductTypeDraft::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(ProductTypeDraft::FIELD_DESCRIPTION);
            $value = (string)$value;
            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return AttributeDefinitionDraftCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            $value = $this->raw(ProductTypeDraft::FIELD_ATTRIBUTES);
            if (is_null($value)) {
                return $this->mapData(AttributeDefinitionDraftCollection::class, null);
            }
            $value = $this->mapData(AttributeDefinitionDraftCollection::class, $value);
            $this->attributes = $value;
        }
        return $this->attributes;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }
    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = (string)$name;

        return $this;
    }
    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description)
    {
        $this->description = (string)$description;

        return $this;
    }
    /**
     * @param AttributeDefinitionDraftCollection $attributes
     * @return $this
     */
    public function setAttributes(AttributeDefinitionDraftCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

}
