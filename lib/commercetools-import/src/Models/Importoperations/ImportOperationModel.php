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
use Commercetools\Import\Models\Errors\ErrorObjectCollection;

use DateTimeImmutable;
use DateTimeImmutableModel;
use stdClass;

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
     * @var ?int
     */
    protected $retryCount;

    /**
     * @var ?ErrorObjectCollection
     */
    protected $errors;

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


    public function __construct(
        int $version = null,
        string $importSinkKey = null,
        string $resourceKey = null,
        string $id = null,
        string $state = null,
        int $resourceVersion = null,
        int $retryCount = null,
        ErrorObjectCollection $errors = null,
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        DateTimeImmutable $expiresAt = null
    ) {
        $this->version = $version;
        $this->importSinkKey = $importSinkKey;
        $this->resourceKey = $resourceKey;
        $this->id = $id;
        $this->state = $state;
        $this->resourceVersion = $resourceVersion;
        $this->retryCount = $retryCount;
        $this->errors = $errors;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->expiresAt = $expiresAt;
    }

    /**
     * <p>The import operation version.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImportOperation::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>The key of the import sink.</p>
     *
     * @return null|string
     */
    public function getImportSinkKey()
    {
        if (is_null($this->importSinkKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportOperation::FIELD_IMPORT_SINK_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->importSinkKey = (string) $data;
        }

        return $this->importSinkKey;
    }

    /**
     * <p>The key of the import resource.</p>
     *
     * @return null|string
     */
    public function getResourceKey()
    {
        if (is_null($this->resourceKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportOperation::FIELD_RESOURCE_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->resourceKey = (string) $data;
        }

        return $this->resourceKey;
    }

    /**
     * <p>The identifier of the operaton that is to be commited</p>
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportOperation::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>The status of the import resource.</p>
     *
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportOperation::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    /**
     * <p>When the resource is successfully imported, this represents the imported resource version</p>
     *
     * @return null|int
     */
    public function getResourceVersion()
    {
        if (is_null($this->resourceVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImportOperation::FIELD_RESOURCE_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->resourceVersion = (int) $data;
        }

        return $this->resourceVersion;
    }

    /**
     * <p>The number of request retries for processing the import resource.</p>
     *
     * @return null|int
     */
    public function getRetryCount()
    {
        if (is_null($this->retryCount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImportOperation::FIELD_RETRY_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->retryCount = (int) $data;
        }

        return $this->retryCount;
    }

    /**
     * <p>If an import resource does not import correctly, the state is set to <code>Rejected</code> or <code>ValidationFailed</code>
     * and this property contains the errors.</p>
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        if (is_null($this->errors)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ImportOperation::FIELD_ERRORS);
            if (is_null($data)) {
                return null;
            }
            $this->errors = ErrorObjectCollection::fromArray($data);
        }

        return $this->errors;
    }

    /**
     * <p>When the import operation was created.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportOperation::FIELD_CREATED_AT);
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
     * <p>When the import operation was modified.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportOperation::FIELD_LAST_MODIFIED_AT);
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
     * <p>When the import operation expires.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getExpiresAt()
    {
        if (is_null($this->expiresAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportOperation::FIELD_EXPIRES_AT);
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

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setImportSinkKey(?string $importSinkKey): void
    {
        $this->importSinkKey = $importSinkKey;
    }

    public function setResourceKey(?string $resourceKey): void
    {
        $this->resourceKey = $resourceKey;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    public function setResourceVersion(?int $resourceVersion): void
    {
        $this->resourceVersion = $resourceVersion;
    }

    public function setRetryCount(?int $retryCount): void
    {
        $this->retryCount = $retryCount;
    }

    public function setErrors(?ErrorObjectCollection $errors): void
    {
        $this->errors = $errors;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

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
