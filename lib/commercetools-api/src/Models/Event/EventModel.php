<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class EventModel extends JsonObjectModel implements Event
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?string
     */
    protected $notificationType;

    /**
     *
     * @var ?string
     */
    protected $resourceType;

    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @psalm-var array<string, class-string<Event> >
     *
     */
    private static $discriminatorClasses = [
       'ImportContainerCreated' => ImportContainerCreatedEventModel::class,
       'ImportContainerDeleted' => ImportContainerDeletedEventModel::class,
       'ImportOperationRejected' => ImportOperationRejectedEventModel::class,
       'ImportUnresolved' => ImportUnresolvedEventModel::class,
       'ImportValidationFailed' => ImportValidationFailedEventModel::class,
       'ImportWaitForMasterVariant' => ImportWaitForMasterVariantEventModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?string $notificationType = null,
        ?string $resourceType = null,
        ?DateTimeImmutable $createdAt = null,
        ?string $type = null
    ) {
        $this->id = $id;
        $this->notificationType = $notificationType;
        $this->resourceType = $resourceType;
        $this->createdAt = $createdAt;
        $this->type = $type;
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
     * <p>Date and time (UTC) the Event was generated.</p>
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
     * @param ?string $notificationType
     */
    public function setNotificationType(?string $notificationType): void
    {
        $this->notificationType = $notificationType;
    }

    /**
     * @param ?string $resourceType
     */
    public function setResourceType(?string $resourceType): void
    {
        $this->resourceType = $resourceType;
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
        if (isset($data[Event::FIELD_CREATED_AT]) && $data[Event::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Event::FIELD_CREATED_AT] = $data[Event::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<Event>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = Event::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->$fieldName)) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->$fieldName;
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<Event> */
        $type = EventModel::class;
        return $type;
    }
}
