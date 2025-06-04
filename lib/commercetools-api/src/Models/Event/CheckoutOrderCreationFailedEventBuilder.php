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
 * @implements Builder<CheckoutOrderCreationFailedEvent>
 */
final class CheckoutOrderCreationFailedEventBuilder implements Builder
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

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**

     * @var null|CheckoutMessageOrderPayloadBaseData|CheckoutMessageOrderPayloadBaseDataBuilder
     */
    private $data;

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

     * @return null|string
     */
    public function getResourceType()
    {
        return $this->resourceType;
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
     * <p>An object containing details of the order which could not be created.</p>
     *

     * @return null|CheckoutMessageOrderPayloadBaseData
     */
    public function getData()
    {
        return $this->data instanceof CheckoutMessageOrderPayloadBaseDataBuilder ? $this->data->build() : $this->data;
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
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?CheckoutMessageOrderPayloadBaseData $data
     * @return $this
     */
    public function withData(?CheckoutMessageOrderPayloadBaseData $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @deprecated use withData() instead
     * @return $this
     */
    public function withDataBuilder(?CheckoutMessageOrderPayloadBaseDataBuilder $data)
    {
        $this->data = $data;

        return $this;
    }

    public function build(): CheckoutOrderCreationFailedEvent
    {
        return new CheckoutOrderCreationFailedEventModel(
            $this->id,
            $this->notificationType,
            $this->resourceType,
            $this->createdAt,
            $this->data instanceof CheckoutMessageOrderPayloadBaseDataBuilder ? $this->data->build() : $this->data
        );
    }

    public static function of(): CheckoutOrderCreationFailedEventBuilder
    {
        return new self();
    }
}
