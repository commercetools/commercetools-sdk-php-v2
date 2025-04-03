<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<EventDeliveryPayload>
 */
final class EventDeliveryPayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?string
     */
    private $type;

    /**

     * @var ?string
     */
    private $resourceType;

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
     * <p>The type of Event that has occurred.</p>
     *

     * @return null|string
     */
    public function getType()
    {
        return $this->type;
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
     * <p>The data describing the event that has taken place.</p>
     *

     * @return null|JsonObject
     */
    public function getData()
    {
        return $this->data;
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
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

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
     * @param ?string $resourceType
     * @return $this
     */
    public function withResourceType(?string $resourceType)
    {
        $this->resourceType = $resourceType;

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


    public function build(): EventDeliveryPayload
    {
        return new EventDeliveryPayloadModel(
            $this->id,
            $this->type,
            $this->resourceType,
            $this->data,
            $this->createdAt
        );
    }

    public static function of(): EventDeliveryPayloadBuilder
    {
        return new self();
    }
}
