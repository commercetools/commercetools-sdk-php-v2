<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Builder\TypeUpdateBuilder;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Common\Resource;

interface Type extends Resource {
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
     * @return array
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
     * @param array $resourceTypeIds
     * @return $this
     */
    public function setResourceTypeIds(array $resourceTypeIds);

    /**
     * @param FieldDefinitionCollection $fieldDefinitions
     * @return $this
     */
    public function setFieldDefinitions(FieldDefinitionCollection $fieldDefinitions);

    /**
     * @return TypeUpdateBuilder
     */
    public function update();
}
