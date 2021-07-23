<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importoperations;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\KeyReferenceCollection;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class ImportOperationModel extends JsonObjectModel implements ImportOperation
{
    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?string
     */
    protected $importSinkKey;

    /**
     * @var ?string
     */
    protected $resourceKey;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?string
     */
    protected $state;

    /**
     * @var ?int
     */
    protected $resourceVersion;

    /**
     * @var ?ErrorObjectCollection
     */
    protected $errors;

    /**
     * @var ?KeyReferenceCollection
     */
    protected $unresolvedReferences;

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $expiresAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $version = null,
        ?string $importSinkKey = null,
        ?string $resourceKey = null,
        ?string $id = null,
        ?string $state = null,
        ?int $resourceVersion = null,
        ?ErrorObjectCollection $errors = null,
        ?KeyReferenceCollection $unresolvedReferences = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?DateTimeImmutable $expiresAt = null
    ) {
        $this->version = $version;
        $this->importSinkKey = $importSinkKey;
        $this->resourceKey = $resourceKey;
        $this->id = $id;
        $this->state = $state;
        $this->resourceVersion = $resourceVersion;
        $this->errors = $errors;
        $this->unresolvedReferences = $unresolvedReferences;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->expiresAt = $expiresAt;
    }

    /**
     * <p>The version of the ImportOperation.</p>
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
     * <p>The key of the <a href="/import-sink#importsink">ImportSink</a>.</p>
     *
     * @return null|string
     */
    public function getImportSinkKey()
    {
        if (is_null($this->importSinkKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_IMPORT_SINK_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->importSinkKey = (string) $data;
        }

        return $this->importSinkKey;
    }

    /**
     * <p>The key of the resource.</p>
     *
     * @return null|string
     */
    public function getResourceKey()
    {
        if (is_null($this->resourceKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_RESOURCE_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->resourceKey = (string) $data;
        }

        return $this->resourceKey;
    }

    /**
     * <p>The ID of the ImportOperation.</p>
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
     * <p>The import status of the resource. Set to <code>Rejected</code> or <code>ValidationFailed</code> if the import of the resource was not successful.</p>
     *
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    /**
     * <p>The version of the impmorted resource when the import was successful.</p>
     *
     * @return null|int
     */
    public function getResourceVersion()
    {
        if (is_null($this->resourceVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_RESOURCE_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->resourceVersion = (int) $data;
        }

        return $this->resourceVersion;
    }

    /**
     * <p>Contains an error if the import of the resource was not successful. See <a href="/error">Errors</a>.</p>
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        if (is_null($this->errors)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ERRORS);
            if (is_null($data)) {
                return null;
            }
            $this->errors = ErrorObjectCollection::fromArray($data);
        }

        return $this->errors;
    }

    /**
     * <p>In case of unresolved status this array will show the unresolved references</p>
     *
     * @return null|KeyReferenceCollection
     */
    public function getUnresolvedReferences()
    {
        if (is_null($this->unresolvedReferences)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_UNRESOLVED_REFERENCES);
            if (is_null($data)) {
                return null;
            }
            $this->unresolvedReferences = KeyReferenceCollection::fromArray($data);
        }

        return $this->unresolvedReferences;
    }

    /**
     * <p>The time when the ImportOperation was created.</p>
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
     * <p>The last time When the ImportOperation was modified.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
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
     * <p>The expiration time of the ImportOperation.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getExpiresAt()
    {
        if (is_null($this->expiresAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXPIRES_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->expiresAt = $data;
        }

        return $this->expiresAt;
    }


    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?string $importSinkKey
     */
    public function setImportSinkKey(?string $importSinkKey): void
    {
        $this->importSinkKey = $importSinkKey;
    }

    /**
     * @param ?string $resourceKey
     */
    public function setResourceKey(?string $resourceKey): void
    {
        $this->resourceKey = $resourceKey;
    }

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?int $resourceVersion
     */
    public function setResourceVersion(?int $resourceVersion): void
    {
        $this->resourceVersion = $resourceVersion;
    }

    /**
     * @param ?ErrorObjectCollection $errors
     */
    public function setErrors(?ErrorObjectCollection $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * @param ?KeyReferenceCollection $unresolvedReferences
     */
    public function setUnresolvedReferences(?KeyReferenceCollection $unresolvedReferences): void
    {
        $this->unresolvedReferences = $unresolvedReferences;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?DateTimeImmutable $expiresAt
     */
    public function setExpiresAt(?DateTimeImmutable $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ImportOperation::FIELD_CREATED_AT]) && $data[ImportOperation::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[ImportOperation::FIELD_CREATED_AT] = $data[ImportOperation::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ImportOperation::FIELD_LAST_MODIFIED_AT]) && $data[ImportOperation::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[ImportOperation::FIELD_LAST_MODIFIED_AT] = $data[ImportOperation::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ImportOperation::FIELD_EXPIRES_AT]) && $data[ImportOperation::FIELD_EXPIRES_AT] instanceof \DateTimeImmutable) {
            $data[ImportOperation::FIELD_EXPIRES_AT] = $data[ImportOperation::FIELD_EXPIRES_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
