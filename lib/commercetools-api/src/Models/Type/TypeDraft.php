<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypeDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_RESOURCE_TYPE_IDS = 'resourceTypeIds';
    public const FIELD_FIELD_DEFINITIONS = 'fieldDefinitions';

    /**
     * <p>User-defined unique identifier for the Type.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the Type.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Description of the Type.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Resources and/or data types for which the Type is defined.</p>
     *
     * @return null|array
     */
    public function getResourceTypeIds();

    /**
     * <p>Defines Custom Fields.</p>
     *
     * @return null|FieldDefinitionCollection
     */
    public function getFieldDefinitions();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?array $resourceTypeIds
     */
    public function setResourceTypeIds(?array $resourceTypeIds): void;

    /**
     * @param ?FieldDefinitionCollection $fieldDefinitions
     */
    public function setFieldDefinitions(?FieldDefinitionCollection $fieldDefinitions): void;
}
