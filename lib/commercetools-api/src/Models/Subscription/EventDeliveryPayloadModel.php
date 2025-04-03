<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class EventDeliveryPayloadModel extends JsonObjectModel implements EventDeliveryPayload
{
    public const DISCRIMINATOR_VALUE = 'Event';
    /**
     *
     * @var ?string
     */
    protected $notificationType;

    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $resourceType;

    /**
     *
     * @var ?mixed
     */
    protected $data;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?string $type = null,
        ?string $resourceType = null,
        ?JsonObject $data = null,
        ?DateTimeImmutable $createdAt = null,
        ?string $notificationType = null
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->resourceType = $resourceType;
        $this->data = $data;
        $this->createdAt = $createdAt;
        $this->notificationType = $notificationType ?? self::DISCRIMINATOR_VALUE;
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
     * <p>Unique identifier of the Event.</p>
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
     * <p>The type of Event that has occurred.</p>
     *
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The type of resource targeted by the Event.</p>
     *
     *
     * @return null|string
     */
    public function getResourceType()
    {
        if (is_null($this->resourceType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_RESOURCE_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->resourceType = (string) $data;
        }

        return $this->resourceType;
    }

    /**
     * <p>The data describing the event that has taken place.</p>
     *
     *
     * @return null|mixed
     */
    public function getData()
    {
        if (is_null($this->data)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DATA);
            if (is_null($data)) {
                return null;
            }
            $this->data = JsonObjectModel::of($data);
        }

        return $this->data;
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
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?string $resourceType
     */
    public function setResourceType(?string $resourceType): void
    {
        $this->resourceType = $resourceType;
    }

    /**
     * @param ?JsonObject $data
     */
    public function setData(?JsonObject $data): void
    {
        $this->data = $data;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[EventDeliveryPayload::FIELD_CREATED_AT]) && $data[EventDeliveryPayload::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[EventDeliveryPayload::FIELD_CREATED_AT] = $data[EventDeliveryPayload::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
