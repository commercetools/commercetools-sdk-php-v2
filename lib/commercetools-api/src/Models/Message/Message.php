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
     * <p>Unique identifier of the Message. Can be used to track which Messages have been processed.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Version of a resource. In case of Messages, this is always <code>1</code>.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the Message was generated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Value of <code>createdAt</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the Message.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the Message.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Message number in relation to other Messages for a given resource. The <code>sequenceNumber</code> of the next Message for the resource is the successor of the <code>sequenceNumber</code> of the current Message. Meaning, the <code>sequenceNumber</code> of the next Message equals the <code>sequenceNumber</code> of the current Message + 1.
     * <code>sequenceNumber</code> can be used to ensure that Messages are processed in the correct order for a particular resource.</p>
     *

     * @return null|int
     */
    public function getSequenceNumber();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the resource on which the change or action was performed.</p>
     *

     * @return null|Reference
     */
    public function getResource();

    /**
     * <p>Version of the resource on which the change or action was performed.</p>
     *

     * @return null|int
     */
    public function getResourceVersion();

    /**
     * <p><a href="/../api/projects/messages#message-types">Message Type</a> of the Message.</p>
     *

     * @return null|string
     */
    public function getType();

    /**
     * <p>User-provided identifiers of the resource, such as <code>key</code> or <code>externalId</code>. Only present if the resource has such identifiers.</p>
     *

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
