<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Api\Models\Message\UserProvidedIdentifiers;
use Commercetools\Api\Models\Message\UserProvidedIdentifiersModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class MessageDeliveryPayloadModel extends JsonObjectModel implements MessageDeliveryPayload
{
    public const DISCRIMINATOR_VALUE = 'Message';
    /**
     *
     * @var ?string
     */
    protected $projectKey;

    /**
     *
     * @var ?string
     */
    protected $notificationType;

    /**
     *
     * @var ?Reference
     */
    protected $resource;

    /**
     *
     * @var ?UserProvidedIdentifiers
     */
    protected $resourceUserProvidedIdentifiers;

    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     *
     * @var ?int
     */
    protected $sequenceNumber;

    /**
     *
     * @var ?int
     */
    protected $resourceVersion;

    /**
     *
     * @var ?PayloadNotIncluded
     */
    protected $payloadNotIncluded;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $projectKey = null,
        ?Reference $resource = null,
        ?UserProvidedIdentifiers $resourceUserProvidedIdentifiers = null,
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?int $sequenceNumber = null,
        ?int $resourceVersion = null,
        ?PayloadNotIncluded $payloadNotIncluded = null,
        ?string $notificationType = null
    ) {
        $this->projectKey = $projectKey;
        $this->resource = $resource;
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->sequenceNumber = $sequenceNumber;
        $this->resourceVersion = $resourceVersion;
        $this->payloadNotIncluded = $payloadNotIncluded;
        $this->notificationType = $notificationType ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Project">Project</a>.
     * Useful in message processing if the Destination receives events from multiple Projects.</p>
     *
     *
     * @return null|string
     */
    public function getProjectKey()
    {
        if (is_null($this->projectKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PROJECT_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->projectKey = (string) $data;
        }

        return $this->projectKey;
    }

    /**
     * <p>Identifies the payload.</p>
     *
     *
     * @return null|string
     */
    public function getNotificationType()
    {
        if (is_null($this->notificationType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NOTIFICATION_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->notificationType = (string) $data;
        }

        return $this->notificationType;
    }

    /**
     * <p>Reference to the resource that triggered the message.</p>
     *
     *
     * @return null|Reference
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->resource = $className::of($data);
        }

        return $this->resource;
    }

    /**
     * <p>User-defined unique identifiers of the resource.</p>
     *
     *
     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers()
    {
        if (is_null($this->resourceUserProvidedIdentifiers)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RESOURCE_USER_PROVIDED_IDENTIFIERS);
            if (is_null($data)) {
                return null;
            }

            $this->resourceUserProvidedIdentifiers = UserProvidedIdentifiersModel::of($data);
        }

        return $this->resourceUserProvidedIdentifiers;
    }

    /**
     * <p>Unique ID of the message.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Last seen version of the resource.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the resource was initially created.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the resource was last modified.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>Used to ensure all messages of the resource are processed in correct order.
     * The <code>sequenceNumber</code> of the next message of the resource is a successor of the <code>sequenceNumber</code> of the current message.</p>
     *
     *
     * @return null|int
     */
    public function getSequenceNumber()
    {
        if (is_null($this->sequenceNumber)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_SEQUENCE_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->sequenceNumber = (int) $data;
        }

        return $this->sequenceNumber;
    }

    /**
     * <p>Version of the resource on which the change was performed.</p>
     *
     *
     * @return null|int
     */
    public function getResourceVersion()
    {
        if (is_null($this->resourceVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_RESOURCE_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->resourceVersion = (int) $data;
        }

        return $this->resourceVersion;
    }

    /**
     * <p>If the payload does not fit into the size limit or its format is not accepted by the messaging service, the <code>payloadNotIncluded</code> field is present.</p>
     *
     *
     * @return null|PayloadNotIncluded
     */
    public function getPayloadNotIncluded()
    {
        if (is_null($this->payloadNotIncluded)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PAYLOAD_NOT_INCLUDED);
            if (is_null($data)) {
                return null;
            }

            $this->payloadNotIncluded = PayloadNotIncludedModel::of($data);
        }

        return $this->payloadNotIncluded;
    }


    /**
     * @param ?string $projectKey
     */
    public function setProjectKey(?string $projectKey): void
    {
        $this->projectKey = $projectKey;
    }

    /**
     * @param ?Reference $resource
     */
    public function setResource(?Reference $resource): void
    {
        $this->resource = $resource;
    }

    /**
     * @param ?UserProvidedIdentifiers $resourceUserProvidedIdentifiers
     */
    public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
    }

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?int $sequenceNumber
     */
    public function setSequenceNumber(?int $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    /**
     * @param ?int $resourceVersion
     */
    public function setResourceVersion(?int $resourceVersion): void
    {
        $this->resourceVersion = $resourceVersion;
    }

    /**
     * @param ?PayloadNotIncluded $payloadNotIncluded
     */
    public function setPayloadNotIncluded(?PayloadNotIncluded $payloadNotIncluded): void
    {
        $this->payloadNotIncluded = $payloadNotIncluded;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[MessageDeliveryPayload::FIELD_CREATED_AT]) && $data[MessageDeliveryPayload::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[MessageDeliveryPayload::FIELD_CREATED_AT] = $data[MessageDeliveryPayload::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[MessageDeliveryPayload::FIELD_LAST_MODIFIED_AT]) && $data[MessageDeliveryPayload::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[MessageDeliveryPayload::FIELD_LAST_MODIFIED_AT] = $data[MessageDeliveryPayload::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
