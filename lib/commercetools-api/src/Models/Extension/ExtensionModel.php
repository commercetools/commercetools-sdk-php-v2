<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class ExtensionModel extends JsonObjectModel implements Extension
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
     * @var ?string
     */
    protected $key;

    /**
     * @var ?ExtensionDestination
     */
    protected $destination;

    /**
     * @var ?ExtensionTriggerCollection
     */
    protected $triggers;

    /**
     * @var ?int
     */
    protected $timeoutInMs;


    public function __construct(
        string $id = null,
        int $version = null,
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        LastModifiedBy $lastModifiedBy = null,
        CreatedBy $createdBy = null,
        string $key = null,
        ExtensionDestination $destination = null,
        ExtensionTriggerCollection $triggers = null,
        int $timeoutInMs = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->key = $key;
        $this->destination = $destination;
        $this->triggers = $triggers;
        $this->timeoutInMs = $timeoutInMs;

    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Extension::FIELD_ID);
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
            $data = $this->raw(Extension::FIELD_VERSION);
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
            $data = $this->raw(Extension::FIELD_CREATED_AT);
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
            $data = $this->raw(Extension::FIELD_LAST_MODIFIED_AT);
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
            $data = $this->raw(Extension::FIELD_LAST_MODIFIED_BY);
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
            $data = $this->raw(Extension::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Extension::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|ExtensionDestination
     */
    public function getDestination()
    {
        if (is_null($this->destination)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Extension::FIELD_DESTINATION);
            if (is_null($data)) {
                return null;
            }

            $this->destination = ExtensionDestinationModel::of($data);
        }

        return $this->destination;
    }

    /**
     * @return null|ExtensionTriggerCollection
     */
    public function getTriggers()
    {
        if (is_null($this->triggers)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(Extension::FIELD_TRIGGERS);
            if (is_null($data)) {
                return null;
            }
            $this->triggers = ExtensionTriggerCollection::fromArray($data);
        }

        return $this->triggers;
    }

    /**
     * <p>The maximum time the commercetools platform waits for a response from the extension.
     * If not present, <code>2000</code> (2 seconds) is used.</p>
     *
     * @return null|int
     */
    public function getTimeoutInMs()
    {
        if (is_null($this->timeoutInMs)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(Extension::FIELD_TIMEOUT_IN_MS);
            if (is_null($data)) {
                return null;
            }
            $this->timeoutInMs = (int) $data;
        }

        return $this->timeoutInMs;
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

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setDestination(?ExtensionDestination $destination): void
    {
        $this->destination = $destination;
    }

    public function setTriggers(?ExtensionTriggerCollection $triggers): void
    {
        $this->triggers = $triggers;
    }

    public function setTimeoutInMs(?int $timeoutInMs): void
    {
        $this->timeoutInMs = $timeoutInMs;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Extension::FIELD_CREATED_AT]) && $data[Extension::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Extension::FIELD_CREATED_AT] = $data[Extension::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Extension::FIELD_LAST_MODIFIED_AT]) && $data[Extension::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[Extension::FIELD_LAST_MODIFIED_AT] = $data[Extension::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }

}
