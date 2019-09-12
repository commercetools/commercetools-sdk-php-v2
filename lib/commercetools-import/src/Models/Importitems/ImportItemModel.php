<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importitems;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use DateTimeImmutable;
use stdClass;

final class ImportItemModel extends JsonObjectModel implements ImportItem
{
    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?string
     */
    protected $resourceKey;

    /**
     * @var ?int
     */
    protected $retryCount;

    /**
     * @var ?string
     */
    protected $state;

    /**
     * @var ?string
     */
    protected $importSinkKey;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?ErrorObjectCollection
     */
    protected $errors;

    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $resourceKey = null,
        int $retryCount = null,
        string $state = null,
        string $importSinkKey = null,
        int $version = null,
        ErrorObjectCollection $errors = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->resourceKey = $resourceKey;
        $this->retryCount = $retryCount;
        $this->state = $state;
        $this->importSinkKey = $importSinkKey;
        $this->version = $version;
        $this->errors = $errors;
    }

    /**
     * <p>The creation time of this import item.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportItem::FIELD_CREATED_AT);
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
     * <p>The last modification time of this import item.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportItem::FIELD_LAST_MODIFIED_AT);
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
     * <p>The key of the imported resource.</p>.
     *
     * @return null|string
     */
    public function getResourceKey()
    {
        if (is_null($this->resourceKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportItem::FIELD_RESOURCE_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->resourceKey = (string) $data;
        }

        return $this->resourceKey;
    }

    /**
     * <p>The number of retries for this item.</p>.
     *
     * @return null|int
     */
    public function getRetryCount()
    {
        if (is_null($this->retryCount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImportItem::FIELD_RETRY_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->retryCount = (int) $data;
        }

        return $this->retryCount;
    }

    /**
     * <p>The status of a single import request.</p>.
     *
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportItem::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    /**
     * <p>The key of the import sink.</p>.
     *
     * @return null|string
     */
    public function getImportSinkKey()
    {
        if (is_null($this->importSinkKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportItem::FIELD_IMPORT_SINK_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->importSinkKey = (string) $data;
        }

        return $this->importSinkKey;
    }

    /**
     * <p>The import item version.</p>.
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImportItem::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Used to report errors when an import item is in the state VALIDATION_FAILED or REJECTED.</p>.
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        if (is_null($this->errors)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ImportItem::FIELD_ERRORS);
            if (is_null($data)) {
                return null;
            }
            $this->errors = ErrorObjectCollection::fromArray($data);
        }

        return $this->errors;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    public function setResourceKey(?string $resourceKey): void
    {
        $this->resourceKey = $resourceKey;
    }

    public function setRetryCount(?int $retryCount): void
    {
        $this->retryCount = $retryCount;
    }

    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    public function setImportSinkKey(?string $importSinkKey): void
    {
        $this->importSinkKey = $importSinkKey;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setErrors(?ErrorObjectCollection $errors): void
    {
        $this->errors = $errors;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ImportItem::FIELD_CREATED_AT]) && $data[ImportItem::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[ImportItem::FIELD_CREATED_AT] = $data[ImportItem::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ImportItem::FIELD_LAST_MODIFIED_AT]) && $data[ImportItem::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[ImportItem::FIELD_LAST_MODIFIED_AT] = $data[ImportItem::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
