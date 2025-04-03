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
 * @implements Builder<ImportWaitForMasterVariantEvent>
 */
final class ImportWaitForMasterVariantEventBuilder implements Builder
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

     * @var null|ImportWaitForMasterVariantEventData|ImportWaitForMasterVariantEventDataBuilder
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
     * <p>An object containing details of the Import Operation with the <code>waitForMasterVariant</code> state.</p>
     *

     * @return null|ImportWaitForMasterVariantEventData
     */
    public function getData()
    {
        return $this->data instanceof ImportWaitForMasterVariantEventDataBuilder ? $this->data->build() : $this->data;
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
     * @param ?ImportWaitForMasterVariantEventData $data
     * @return $this
     */
    public function withData(?ImportWaitForMasterVariantEventData $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @deprecated use withData() instead
     * @return $this
     */
    public function withDataBuilder(?ImportWaitForMasterVariantEventDataBuilder $data)
    {
        $this->data = $data;

        return $this;
    }

    public function build(): ImportWaitForMasterVariantEvent
    {
        return new ImportWaitForMasterVariantEventModel(
            $this->id,
            $this->notificationType,
            $this->resourceType,
            $this->createdAt,
            $this->data instanceof ImportWaitForMasterVariantEventDataBuilder ? $this->data->build() : $this->data
        );
    }

    public static function of(): ImportWaitForMasterVariantEventBuilder
    {
        return new self();
    }
}
