<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\LocalizedString;

class TypeDraftModel extends JsonObjectModel implements TypeDraft {
    /**
     * @var string
     */
    protected $key;
    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var LocalizedString
     */
    protected $description;
    /**
     * @var array
     */
    protected $resourceTypeIds;
    /**
     * @var FieldDefinitionCollection
     */
    protected $fieldDefinitions;

    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(TypeDraft::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(TypeDraft::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(TypeDraft::FIELD_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return array
     */
    public function getResourceTypeIds()
    {
        if (is_null($this->resourceTypeIds)) {
            $value = $this->raw(TypeDraft::FIELD_RESOURCE_TYPE_IDS);
            $value = (array)$value;
            $this->resourceTypeIds = $value;
        }
        return $this->resourceTypeIds;
    }
    /**
     * @return FieldDefinitionCollection
     */
    public function getFieldDefinitions()
    {
        if (is_null($this->fieldDefinitions)) {
            $value = $this->raw(TypeDraft::FIELD_FIELD_DEFINITIONS);
            if (is_null($value)) {
                return $this->mapData(FieldDefinitionCollection::class, null);
            }
            $value = $this->mapData(FieldDefinitionCollection::class, $value);
            $this->fieldDefinitions = $value;
        }
        return $this->fieldDefinitions;
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
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }
    /**
     * @param array $resourceTypeIds
     * @return $this
     */
    public function setResourceTypeIds(array $resourceTypeIds)
    {
        $this->resourceTypeIds = $resourceTypeIds;

        return $this;
    }
    /**
     * @param FieldDefinitionCollection $fieldDefinitions
     * @return $this
     */
    public function setFieldDefinitions(FieldDefinitionCollection $fieldDefinitions)
    {
        $this->fieldDefinitions = $fieldDefinitions;

        return $this;
    }

}
