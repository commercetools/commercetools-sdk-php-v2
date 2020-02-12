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
use DateTimeImmutableModel;
use stdClass;

final class ResourceUpdatedDeliveryModel extends JsonObjectModel implements ResourceUpdatedDelivery
{
    public const DISCRIMINATOR_VALUE = 'ResourceUpdated';
    /**
     * @var ?string
     */
    protected $projectKey;

    /**
     * @var ?string
     */
    protected $notificationType;

    /**
     * @var ?Reference
     */
    protected $resource;

    /**
     * @var ?UserProvidedIdentifiers
     */
    protected $resourceUserProvidedIdentifiers;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?int
     */
    protected $oldVersion;

    /**
     * @var ?DateTimeImmutable
     */
    protected $modifiedAt;


    public function __construct(
        string $projectKey = null,
        Reference $resource = null,
        UserProvidedIdentifiers $resourceUserProvidedIdentifiers = null,
        int $version = null,
        int $oldVersion = null,
        DateTimeImmutable $modifiedAt = null
    ) {
        $this->projectKey = $projectKey;
        $this->resource = $resource;
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
        $this->version = $version;
        $this->oldVersion = $oldVersion;
        $this->modifiedAt = $modifiedAt;
        $this->notificationType = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getProjectKey()
    {
        if (is_null($this->projectKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(SubscriptionDelivery::FIELD_PROJECT_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->projectKey = (string) $data;
        }

        return $this->projectKey;
    }

    /**
     * @return null|string
     */
    public function getNotificationType()
    {
        if (is_null($this->notificationType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(SubscriptionDelivery::FIELD_NOTIFICATION_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->notificationType = (string) $data;
        }

        return $this->notificationType;
    }

    /**
     * @return null|Reference
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(SubscriptionDelivery::FIELD_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->resource = $className::of($data);
        }

        return $this->resource;
    }

    /**
     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers()
    {
        if (is_null($this->resourceUserProvidedIdentifiers)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(SubscriptionDelivery::FIELD_RESOURCE_USER_PROVIDED_IDENTIFIERS);
            if (is_null($data)) {
                return null;
            }

            $this->resourceUserProvidedIdentifiers = UserProvidedIdentifiersModel::of($data);
        }

        return $this->resourceUserProvidedIdentifiers;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ResourceUpdatedDelivery::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|int
     */
    public function getOldVersion()
    {
        if (is_null($this->oldVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ResourceUpdatedDelivery::FIELD_OLD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->oldVersion = (int) $data;
        }

        return $this->oldVersion;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getModifiedAt()
    {
        if (is_null($this->modifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ResourceUpdatedDelivery::FIELD_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->modifiedAt = $data;
        }

        return $this->modifiedAt;
    }

    public function setProjectKey(?string $projectKey): void
    {
        $this->projectKey = $projectKey;
    }

    public function setResource(?Reference $resource): void
    {
        $this->resource = $resource;
    }

    public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setOldVersion(?int $oldVersion): void
    {
        $this->oldVersion = $oldVersion;
    }

    public function setModifiedAt(?DateTimeImmutable $modifiedAt): void
    {
        $this->modifiedAt = $modifiedAt;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ResourceUpdatedDelivery::FIELD_MODIFIED_AT]) && $data[ResourceUpdatedDelivery::FIELD_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[ResourceUpdatedDelivery::FIELD_MODIFIED_AT] = $data[ResourceUpdatedDelivery::FIELD_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
