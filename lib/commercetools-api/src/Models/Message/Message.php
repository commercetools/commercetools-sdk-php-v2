<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\Reference;
use DateTimeImmutable;

interface Message extends BaseResource
{
    const DISCRIMINATOR_FIELD = 'type';
    const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    const FIELD_CREATED_BY = 'createdBy';
    const FIELD_SEQUENCE_NUMBER = 'sequenceNumber';
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESOURCE_VERSION = 'resourceVersion';
    const FIELD_TYPE = 'type';
    const FIELD_RESOURCE_USER_PROVIDED_IDENTIFIERS = 'resourceUserProvidedIdentifiers';

    /**
     * @return null|string
     */
    public function getId();

    /**
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
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @return null|int
     */
    public function getSequenceNumber();

    /**
     * @return null|Reference
     */
    public function getResource();

    /**
     * @return null|int
     */
    public function getResourceVersion();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setSequenceNumber(?int $sequenceNumber): void;

    public function setResource(?Reference $resource): void;

    public function setResourceVersion(?int $resourceVersion): void;

    public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void;
}
