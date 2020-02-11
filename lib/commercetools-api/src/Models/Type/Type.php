<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use DateTimeImmutable;

interface Type extends BaseResource
{

    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_RESOURCE_TYPE_IDS = 'resourceTypeIds';
    public const FIELD_FIELD_DEFINITIONS = 'fieldDefinitions';

    /**
     * <p>The unique ID of the type.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>The current version of the type.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Identifier for the type (max.
     * 256 characters).</p>
     *
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
     * <p>Defines for which resource(s) the type is valid.</p>
     *
     * @return null|array
     */
    public function getResourceTypeIds();

    /**
     * @return null|FieldDefinitionCollection
     */
    public function getFieldDefinitions();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setKey(?string $key): void;

    public function setName(?LocalizedString $name): void;

    public function setDescription(?LocalizedString $description): void;

    public function setResourceTypeIds(?array $resourceTypeIds): void;

    public function setFieldDefinitions(?FieldDefinitionCollection $fieldDefinitions): void;
}
