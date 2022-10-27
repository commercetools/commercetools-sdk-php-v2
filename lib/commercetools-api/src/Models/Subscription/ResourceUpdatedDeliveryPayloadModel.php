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
use stdClass;

/**
 * @internal
 */
final class ResourceUpdatedDeliveryPayloadModel extends JsonObjectModel implements ResourceUpdatedDeliveryPayload
{
    public const DISCRIMINATOR_VALUE = 'ResourceUpdated';
    /**
     *
     * @var ?string
     */
    protected $projectKey;

    /**
     *
     * @var ?string
     */
    protected $notificationType;

    /**
     *
     * @var ?Reference
     */
    protected $resource;

    /**
     *
     * @var ?UserProvidedIdentifiers
     */
    protected $resourceUserProvidedIdentifiers;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?int
     */
    protected $oldVersion;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $modifiedAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $projectKey = null,
        ?Reference $resource = null,
        ?UserProvidedIdentifiers $resourceUserProvidedIdentifiers = null,
        ?int $version = null,
        ?int $oldVersion = null,
        ?DateTimeImmutable $modifiedAt = null,
        ?string $notificationType = null
    ) {
        $this->projectKey = $projectKey;
        $this->resource = $resource;
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
        $this->version = $version;
        $this->oldVersion = $oldVersion;
        $this->modifiedAt = $modifiedAt;
        $this->notificationType = $notificationType ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Project">Project</a>.
     * Useful in message processing if the Destination receives events from multiple Projects.</p>
     *
     *
     * @return null|string
     */
    public function getProjectKey()
    {
        if (is_null($this->projectKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PROJECT_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->projectKey = (string) $data;
        }

        return $this->projectKey;
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
     * <p>Reference to the resource that triggered the message.</p>
     *
     *
     * @return null|Reference
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->resource = $className::of($data);
        }

        return $this->resource;
    }

    /**
     * <p>User-defined unique identifiers of the resource.</p>
     *
     *
     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers()
    {
        if (is_null($this->resourceUserProvidedIdentifiers)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RESOURCE_USER_PROVIDED_IDENTIFIERS);
            if (is_null($data)) {
                return null;
            }

            $this->resourceUserProvidedIdentifiers = UserProvidedIdentifiersModel::of($data);
        }

        return $this->resourceUserProvidedIdentifiers;
    }

    /**
     * <p>Last seen version of the resource.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Version of the resource before the update.</p>
     *
     *
     * @return null|int
     */
    public function getOldVersion()
    {
        if (is_null($this->oldVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_OLD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->oldVersion = (int) $data;
        }

        return $this->oldVersion;
    }

    /**
     * <p>Date and time (UTC) the resource was last updated.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getModifiedAt()
    {
        if (is_null($this->modifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MODIFIED_AT);
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


    /**
     * @param ?string $projectKey
     */
    public function setProjectKey(?string $projectKey): void
    {
        $this->projectKey = $projectKey;
    }

    /**
     * @param ?Reference $resource
     */
    public function setResource(?Reference $resource): void
    {
        $this->resource = $resource;
    }

    /**
     * @param ?UserProvidedIdentifiers $resourceUserProvidedIdentifiers
     */
    public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?int $oldVersion
     */
    public function setOldVersion(?int $oldVersion): void
    {
        $this->oldVersion = $oldVersion;
    }

    /**
     * @param ?DateTimeImmutable $modifiedAt
     */
    public function setModifiedAt(?DateTimeImmutable $modifiedAt): void
    {
        $this->modifiedAt = $modifiedAt;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ResourceUpdatedDeliveryPayload::FIELD_MODIFIED_AT]) && $data[ResourceUpdatedDeliveryPayload::FIELD_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[ResourceUpdatedDeliveryPayload::FIELD_MODIFIED_AT] = $data[ResourceUpdatedDeliveryPayload::FIELD_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
