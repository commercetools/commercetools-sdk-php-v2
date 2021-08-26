<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<Subscription>
 */
final class SubscriptionBuilder implements Builder
{
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
     * @var null|LastModifiedBy|LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**
     * @var null|CreatedBy|CreatedByBuilder
     */
    private $createdBy;

    /**
     * @var ?ChangeSubscriptionCollection
     */
    private $changes;

    /**
     * @var null|Destination|DestinationBuilder
     */
    private $destination;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?MessageSubscriptionCollection
     */
    private $messages;

    /**
     * @var null|DeliveryFormat|DeliveryFormatBuilder
     */
    private $format;

    /**
     * @var ?string
     */
    private $status;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources created after 2019-02-01 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 2019-02-01 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * @return null|ChangeSubscriptionCollection
     */
    public function getChanges()
    {
        return $this->changes;
    }

    /**
     * @return null|Destination
     */
    public function getDestination()
    {
        return $this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|MessageSubscriptionCollection
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @return null|DeliveryFormat
     */
    public function getFormat()
    {
        return $this->format instanceof DeliveryFormatBuilder ? $this->format->build() : $this->format;
    }

    /**
     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
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
     * @param ?LastModifiedBy $lastModifiedBy
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @param ?CreatedBy $createdBy
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @param ?ChangeSubscriptionCollection $changes
     * @return $this
     */
    public function withChanges(?ChangeSubscriptionCollection $changes)
    {
        $this->changes = $changes;

        return $this;
    }

    /**
     * @param ?Destination $destination
     * @return $this
     */
    public function withDestination(?Destination $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?MessageSubscriptionCollection $messages
     * @return $this
     */
    public function withMessages(?MessageSubscriptionCollection $messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * @param ?DeliveryFormat $format
     * @return $this
     */
    public function withFormat(?DeliveryFormat $format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @param ?string $status
     * @return $this
     */
    public function withStatus(?string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @deprecated use withLastModifiedBy() instead
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @deprecated use withCreatedBy() instead
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @deprecated use withDestination() instead
     * @return $this
     */
    public function withDestinationBuilder(?DestinationBuilder $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @deprecated use withFormat() instead
     * @return $this
     */
    public function withFormatBuilder(?DeliveryFormatBuilder $format)
    {
        $this->format = $format;

        return $this;
    }

    public function build(): Subscription
    {
        return new SubscriptionModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->changes,
            $this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination,
            $this->key,
            $this->messages,
            $this->format instanceof DeliveryFormatBuilder ? $this->format->build() : $this->format,
            $this->status
        );
    }

    public static function of(): SubscriptionBuilder
    {
        return new self();
    }
}
