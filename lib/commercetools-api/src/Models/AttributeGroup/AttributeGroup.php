<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface AttributeGroup extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_KEY = 'key';

    /**
     * <p>Platform-generated unique identifier of the AttributeGroup.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the AttributeGroup.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the AttributeGroup was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the AttributeGroup was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the AttributeGroup.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the AttributeGroup.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Name of the AttributeGroup.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Description of the AttributeGroup.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p><a href="ctp:api:type:AttributeDefinition">Attributes</a> with unique values.</p>
     *

     * @return null|AttributeReferenceCollection
     */
    public function getAttributes();

    /**
     * <p>User-defined unique identifier of the AttributeGroup.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?AttributeReferenceCollection $attributes
     */
    public function setAttributes(?AttributeReferenceCollection $attributes): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
