<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface MessageDeliveryPayload extends DeliveryPayload
{
    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    public const FIELD_SEQUENCE_NUMBER = 'sequenceNumber';
    public const FIELD_RESOURCE_VERSION = 'resourceVersion';
    public const FIELD_PAYLOAD_NOT_INCLUDED = 'payloadNotIncluded';

    /**
     * <p>Unique ID of the message.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Last seen version of the resource.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the resource was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the resource was last modified.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Used to ensure all messages of the resource are processed in correct order.
     * The <code>sequenceNumber</code> of the next message of the resource is a successor of the <code>sequenceNumber</code> of the current message.</p>
     *

     * @return null|int
     */
    public function getSequenceNumber();

    /**
     * <p>Version of the resource on which the update was performed.</p>
     *

     * @return null|int
     */
    public function getResourceVersion();

    /**
     * <p>If the payload does not fit into the size limit or its format is not accepted by the messaging service, the <code>payloadNotIncluded</code> field is present.</p>
     *

     * @return null|PayloadNotIncluded
     */
    public function getPayloadNotIncluded();

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
     * @param ?int $sequenceNumber
     */
    public function setSequenceNumber(?int $sequenceNumber): void;

    /**
     * @param ?int $resourceVersion
     */
    public function setResourceVersion(?int $resourceVersion): void;

    /**
     * @param ?PayloadNotIncluded $payloadNotIncluded
     */
    public function setPayloadNotIncluded(?PayloadNotIncluded $payloadNotIncluded): void;
}
