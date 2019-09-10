<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface TypeDraft extends JsonObject
{
    
    const FIELD_KEY = 'key';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_RESOURCE_TYPE_IDS = 'resourceTypeIds';
    const FIELD_FIELD_DEFINITIONS = 'fieldDefinitions';

    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getDescription();
    
    /**
     *
     * @return array|null
     */
    public function getResourceTypeIds();
    
    /**
     *
     * @return FieldDefinitionCollection|null
     */
    public function getFieldDefinitions();
    public function setKey(?string $key): void;
    
    public function setName(?LocalizedString $name): void;
    
    public function setDescription(?LocalizedString $description): void;
    
    public function setResourceTypeIds(?array $resourceTypeIds): void;
    
    public function setFieldDefinitions(?FieldDefinitionCollection $fieldDefinitions): void;
}