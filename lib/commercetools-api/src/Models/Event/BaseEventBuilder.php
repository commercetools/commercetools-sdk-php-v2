<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<BaseEvent>
 */
final class BaseEventBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?string
     */
    private $notificationType;

    /**

     * @var ?string
     */
    private $resourceType;

    /**

     * @var ?string
     */
    private $type;

    /**

     * @var ?JsonObject
     */
    private $data;

    /**

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * <p>Unique identifier of the Event.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**

     * @return null|string
     */
    public function getNotificationType()
    {
        return $this->notificationType;
    }

    /**
     * <p>The type of resource targeted by the Event.</p>
     *

     * @return null|string
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * <p>The type of Event that has occurred.</p>
     *

     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <p>An object containing details related to the Event.</p>
     *

     * @return null|JsonObject
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * <p>Date and time (UTC) the Event was generated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
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
     * @param ?string $notificationType
     * @return $this
     */
    public function withNotificationType(?string $notificationType)
    {
        $this->notificationType = $notificationType;

        return $this;
    }

    /**
     * @param ?string $resourceType
     * @return $this
     */
    public function withResourceType(?string $resourceType)
    {
        $this->resourceType = $resourceType;

        return $this;
    }

    /**
     * @param ?string $type
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param ?JsonObject $data
     * @return $this
     */
    public function withData(?JsonObject $data)
    {
        $this->data = $data;

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


    public function build(): BaseEvent
    {
        return new BaseEventModel(
            $this->id,
            $this->notificationType,
            $this->resourceType,
            $this->type,
            $this->data,
            $this->createdAt
        );
    }

    public static function of(): BaseEventBuilder
    {
        return new self();
    }
}
