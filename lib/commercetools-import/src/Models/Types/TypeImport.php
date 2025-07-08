<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Types;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\LocalizedString;

interface TypeImport extends ImportResource
{
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_RESOURCE_TYPE_IDS = 'resourceTypeIds';
    public const FIELD_FIELD_DEFINITIONS = 'fieldDefinitions';

    /**
     * <p>User-defined unique identifier for the Type. If a <a href="ctp:api:type:Type">Type</a> with this <code>key</code> exists, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Maps to <code>Type.name</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Maps to <code>Type.description</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Maps to <code>Type.resourceTypeIds</code>. This value cannot be changed after the Type is imported.</p>
     *

     * @return null|array
     */
    public function getResourceTypeIds();

    /**
     * <p>Maps to <code>Type.fieldDefinitions</code>.</p>
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
