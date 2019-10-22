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
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class ResourceCreatedDeliveryModel extends JsonObjectModel implements ResourceCreatedDelivery
{
    const DISCRIMINATOR_VALUE = 'ResourceCreated';

    /**
     * @var ?string
     */
    protected $projectKey;

    /**
     * @var ?Reference
     */
    protected $resource;

    /**
     * @var ?UserProvidedIdentifiers
     */
    protected $resourceUserProvidedIdentifiers;

    /**
     * @var ?string
     */
    protected $notificationType;

    /**
     * @var ?DateTimeImmutable
     */
    protected $modifiedAt;

    /**
     * @var ?int
     */
    protected $version;

    public function __construct(
        string $projectKey = null,
        Reference $resource = null,
        UserProvidedIdentifiers $resourceUserProvidedIdentifiers = null,
        string $notificationType = null,
        DateTimeImmutable $modifiedAt = null,
        int $version = null
    ) {
        $this->projectKey = $projectKey;
        $this->resource = $resource;
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
        $this->notificationType = $notificationType;
        $this->modifiedAt = $modifiedAt;
        $this->version = $version;
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
     * @return null|DateTimeImmutable
     */
    public function getModifiedAt()
    {
        if (is_null($this->modifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ResourceCreatedDelivery::FIELD_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::TIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->modifiedAt = $data;
        }

        return $this->modifiedAt;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ResourceCreatedDelivery::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
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

    public function setNotificationType(?string $notificationType): void
    {
        $this->notificationType = $notificationType;
    }

    public function setModifiedAt(?DateTimeImmutable $modifiedAt): void
    {
        $this->modifiedAt = $modifiedAt;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ResourceCreatedDelivery::FIELD_MODIFIED_AT]) && $data[ResourceCreatedDelivery::FIELD_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[ResourceCreatedDelivery::FIELD_MODIFIED_AT] = $data[ResourceCreatedDelivery::FIELD_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
