<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\JsonObject;

interface TypeDraft extends JsonObject
{
    const FIELD_KEY = 'key';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_RESOURCE_TYPE_IDS = 'resourceTypeIds';
    const FIELD_FIELD_DEFINITIONS = 'fieldDefinitions';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>The IDs of the resources that can be customized with this type.</p>
     *
     * @return null|array
     */
    public function getResourceTypeIds();

    /**
     * @return null|FieldDefinitionCollection
     */
    public function getFieldDefinitions();

    public function setKey(?string $key): void;

    public function setName(?LocalizedString $name): void;

    public function setDescription(?LocalizedString $description): void;

    public function setResourceTypeIds(?array $resourceTypeIds): void;

    public function setFieldDefinitions(?FieldDefinitionCollection $fieldDefinitions): void;
}
