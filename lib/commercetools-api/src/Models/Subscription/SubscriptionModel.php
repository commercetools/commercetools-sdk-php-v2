<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class SubscriptionModel extends JsonObjectModel implements Subscription
{
    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     * @var ?ChangeSubscriptionCollection
     */
    protected $changes;

    /**
     * @var ?Destination
     */
    protected $destination;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?MessageSubscriptionCollection
     */
    protected $messages;

    /**
     * @var ?DeliveryFormat
     */
    protected $format;

    /**
     * @var ?string
     */
    protected $status;

    public function __construct(
        string $id = null,
        int $version = null,
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        LastModifiedBy $lastModifiedBy = null,
        CreatedBy $createdBy = null,
        ChangeSubscriptionCollection $changes = null,
        Destination $destination = null,
        string $key = null,
        MessageSubscriptionCollection $messages = null,
        DeliveryFormat $format = null,
        string $status = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->changes = $changes;
        $this->destination = $destination;
        $this->key = $key;
        $this->messages = $messages;
        $this->format = $format;
        $this->status = $status;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Subscription::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(Subscription::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Subscription::FIELD_CREATED_AT);
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
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Subscription::FIELD_LAST_MODIFIED_AT);
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
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Subscription::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Subscription::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * @return null|ChangeSubscriptionCollection
     */
    public function getChanges()
    {
        if (is_null($this->changes)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(Subscription::FIELD_CHANGES);
            if (is_null($data)) {
                return null;
            }
            $this->changes = ChangeSubscriptionCollection::fromArray($data);
        }

        return $this->changes;
    }

    /**
     * @return null|Destination
     */
    public function getDestination()
    {
        if (is_null($this->destination)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Subscription::FIELD_DESTINATION);
            if (is_null($data)) {
                return null;
            }
            $className = DestinationModel::resolveDiscriminatorClass($data);
            $this->destination = $className::of($data);
        }

        return $this->destination;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Subscription::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|MessageSubscriptionCollection
     */
    public function getMessages()
    {
        if (is_null($this->messages)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(Subscription::FIELD_MESSAGES);
            if (is_null($data)) {
                return null;
            }
            $this->messages = MessageSubscriptionCollection::fromArray($data);
        }

        return $this->messages;
    }

    /**
     * @return null|DeliveryFormat
     */
    public function getFormat()
    {
        if (is_null($this->format)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Subscription::FIELD_FORMAT);
            if (is_null($data)) {
                return null;
            }
            $className = DeliveryFormatModel::resolveDiscriminatorClass($data);
            $this->format = $className::of($data);
        }

        return $this->format;
    }

    /**
     * @return null|string
     */
    public function getStatus()
    {
        if (is_null($this->status)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Subscription::FIELD_STATUS);
            if (is_null($data)) {
                return null;
            }
            $this->status = (string) $data;
        }

        return $this->status;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    public function setChanges(?ChangeSubscriptionCollection $changes): void
    {
        $this->changes = $changes;
    }

    public function setDestination(?Destination $destination): void
    {
        $this->destination = $destination;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setMessages(?MessageSubscriptionCollection $messages): void
    {
        $this->messages = $messages;
    }

    public function setFormat(?DeliveryFormat $format): void
    {
        $this->format = $format;
    }

    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Subscription::FIELD_CREATED_AT]) && $data[Subscription::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Subscription::FIELD_CREATED_AT] = $data[Subscription::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Subscription::FIELD_LAST_MODIFIED_AT]) && $data[Subscription::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[Subscription::FIELD_LAST_MODIFIED_AT] = $data[Subscription::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
