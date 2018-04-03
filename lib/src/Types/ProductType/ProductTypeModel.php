<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ResourceModel;

use Commercetools\Builder\ProductTypeUpdateBuilder;
use Commercetools\Types\Common\Resource;

class ProductTypeModel extends ResourceModel implements ProductType {
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
     * @var AttributeDefinitionCollection
     */
    protected $attributes;

    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(ProductType::FIELD_KEY);
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
            $value = $this->raw(ProductType::FIELD_NAME);
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
            $value = $this->raw(ProductType::FIELD_DESCRIPTION);
            $value = (string)$value;
            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return AttributeDefinitionCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            $value = $this->raw(ProductType::FIELD_ATTRIBUTES);
            if (is_null($value)) {
                return $this->mapData(AttributeDefinitionCollection::class, null);
            }
            $value = $this->mapData(AttributeDefinitionCollection::class, $value);
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
     * @param AttributeDefinitionCollection $attributes
     * @return $this
     */
    public function setAttributes(AttributeDefinitionCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }


    /**
     * @return ProductTypeUpdateBuilder
     */
    public function update()
    {
        $builder = new ProductTypeUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}
