<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\LocalizedString;

interface TypeDraft extends JsonObject {
    const FIELD_KEY = 'key';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_RESOURCE_TYPE_IDS = 'resourceTypeIds';
    const FIELD_FIELD_DEFINITIONS = 'fieldDefinitions';

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @return ResourceTypeIdCollection
     */
    public function getResourceTypeIds();

    /**
     * @return FieldDefinitionCollection
     */
    public function getFieldDefinitions();

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

    /**
     * @param ResourceTypeIdCollection $resourceTypeIds
     * @return $this
     */
    public function setResourceTypeIds(ResourceTypeIdCollection $resourceTypeIds);

    /**
     * @param FieldDefinitionCollection $fieldDefinitions
     * @return $this
     */
    public function setFieldDefinitions(FieldDefinitionCollection $fieldDefinitions);

}
