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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Message extends BaseResource
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_SEQUENCE_NUMBER = 'sequenceNumber';
    public const FIELD_RESOURCE = 'resource';
    public const FIELD_RESOURCE_VERSION = 'resourceVersion';
    public const FIELD_TYPE = 'type';
    public const FIELD_RESOURCE_USER_PROVIDED_IDENTIFIERS = 'resourceUserProvidedIdentifiers';

    /**
     * <p>Unique identifier of the Message.</p>
     *
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
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @return null|int
     */
    public function getSequenceNumber();

    /**
     * <p>A Reference represents a loose reference to another resource in the same Project identified by its <code>id</code>. The <code>typeId</code> indicates the type of the referenced resource. Each resource type has its corresponding Reference type, like <a href="ctp:api:type:ChannelReference">ChannelReference</a>.  A referenced resource can be embedded through <a href="/general-concepts#reference-expansion">Reference Expansion</a>. The expanded reference is the value of an additional <code>obj</code> field then.</p>
     *
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
     * @param ?int $sequenceNumber
     */
    public function setSequenceNumber(?int $sequenceNumber): void;

    /**
     * @param ?Reference $resource
     */
    public function setResource(?Reference $resource): void;

    /**
     * @param ?int $resourceVersion
     */
    public function setResourceVersion(?int $resourceVersion): void;

    /**
     * @param ?UserProvidedIdentifiers $resourceUserProvidedIdentifiers
     */
    public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void;
}
