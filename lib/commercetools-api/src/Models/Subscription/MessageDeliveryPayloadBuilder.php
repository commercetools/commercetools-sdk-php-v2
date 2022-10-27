<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Api\Models\Message\UserProvidedIdentifiers;
use Commercetools\Api\Models\Message\UserProvidedIdentifiersBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<MessageDeliveryPayload>
 */
final class MessageDeliveryPayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $projectKey;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $resource;

    /**

     * @var null|UserProvidedIdentifiers|UserProvidedIdentifiersBuilder
     */
    private $resourceUserProvidedIdentifiers;

    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**

     * @var ?int
     */
    private $sequenceNumber;

    /**

     * @var ?int
     */
    private $resourceVersion;

    /**

     * @var null|PayloadNotIncluded|PayloadNotIncludedBuilder
     */
    private $payloadNotIncluded;

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Project">Project</a>.
     * Useful in message processing if the Destination receives events from multiple Projects.</p>
     *

     * @return null|string
     */
    public function getProjectKey()
    {
        return $this->projectKey;
    }

    /**
     * <p>Reference to the resource that triggered the message.</p>
     *

     * @return null|Reference
     */
    public function getResource()
    {
        return $this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource;
    }

    /**
     * <p>User-defined unique identifiers of the resource.</p>
     *

     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers()
    {
        return $this->resourceUserProvidedIdentifiers instanceof UserProvidedIdentifiersBuilder ? $this->resourceUserProvidedIdentifiers->build() : $this->resourceUserProvidedIdentifiers;
    }

    /**
     * <p>Unique ID of the message.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Last seen version of the resource.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the resource was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the resource was last modified.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Used to ensure all messages of the resource are processed in correct order.
     * The <code>sequenceNumber</code> of the next message of the resource is a successor of the <code>sequenceNumber</code> of the current message.</p>
     *

     * @return null|int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * <p>Version of the resource on which the change was performed.</p>
     *

     * @return null|int
     */
    public function getResourceVersion()
    {
        return $this->resourceVersion;
    }

    /**
     * <p>If the payload does not fit into the size limit or its format is not accepted by the messaging service, the <code>payloadNotIncluded</code> field is present.</p>
     *

     * @return null|PayloadNotIncluded
     */
    public function getPayloadNotIncluded()
    {
        return $this->payloadNotIncluded instanceof PayloadNotIncludedBuilder ? $this->payloadNotIncluded->build() : $this->payloadNotIncluded;
    }

    /**
     * @param ?string $projectKey
     * @return $this
     */
    public function withProjectKey(?string $projectKey)
    {
        $this->projectKey = $projectKey;

        return $this;
    }

    /**
     * @param ?Reference $resource
     * @return $this
     */
    public function withResource(?Reference $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @param ?UserProvidedIdentifiers $resourceUserProvidedIdentifiers
     * @return $this
     */
    public function withResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers)
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;

        return $this;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?int $sequenceNumber
     * @return $this
     */
    public function withSequenceNumber(?int $sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * @param ?int $resourceVersion
     * @return $this
     */
    public function withResourceVersion(?int $resourceVersion)
    {
        $this->resourceVersion = $resourceVersion;

        return $this;
    }

    /**
     * @param ?PayloadNotIncluded $payloadNotIncluded
     * @return $this
     */
    public function withPayloadNotIncluded(?PayloadNotIncluded $payloadNotIncluded)
    {
        $this->payloadNotIncluded = $payloadNotIncluded;

        return $this;
    }

    /**
     * @deprecated use withResource() instead
     * @return $this
     */
    public function withResourceBuilder(?ReferenceBuilder $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @deprecated use withResourceUserProvidedIdentifiers() instead
     * @return $this
     */
    public function withResourceUserProvidedIdentifiersBuilder(?UserProvidedIdentifiersBuilder $resourceUserProvidedIdentifiers)
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;

        return $this;
    }

    /**
     * @deprecated use withPayloadNotIncluded() instead
     * @return $this
     */
    public function withPayloadNotIncludedBuilder(?PayloadNotIncludedBuilder $payloadNotIncluded)
    {
        $this->payloadNotIncluded = $payloadNotIncluded;

        return $this;
    }

    public function build(): MessageDeliveryPayload
    {
        return new MessageDeliveryPayloadModel(
            $this->projectKey,
            $this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource,
            $this->resourceUserProvidedIdentifiers instanceof UserProvidedIdentifiersBuilder ? $this->resourceUserProvidedIdentifiers->build() : $this->resourceUserProvidedIdentifiers,
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->sequenceNumber,
            $this->resourceVersion,
            $this->payloadNotIncluded instanceof PayloadNotIncludedBuilder ? $this->payloadNotIncluded->build() : $this->payloadNotIncluded
        );
    }

    public static function of(): MessageDeliveryPayloadBuilder
    {
        return new self();
    }
}
