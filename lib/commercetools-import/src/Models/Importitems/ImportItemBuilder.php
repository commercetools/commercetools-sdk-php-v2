<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importitems;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use DateTimeImmutable;

/**
 * @implements Builder<ImportItem>
 */
final class ImportItemBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**
     * @var ?string
     */
    private $resourceKey;

    /**
     * @var ?int
     */
    private $retryCount;

    /**
     * @var ?string
     */
    private $state;

    /**
     * @var ?string
     */
    private $importSinkKey;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?ErrorObjectCollection
     */
    private $errors;

    public function __construct()
    {
    }

    /**
     * <p>The creation time of this import item.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>The last modification time of this import item.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>The key of the imported resource.</p>.
     *
     * @return null|string
     */
    public function getResourceKey()
    {
        return $this->resourceKey;
    }

    /**
     * <p>The number of retries for this item.</p>.
     *
     * @return null|int
     */
    public function getRetryCount()
    {
        return $this->retryCount;
    }

    /**
     * <p>The status of a single import request.</p>.
     *
     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>The key of the import sink.</p>.
     *
     * @return null|string
     */
    public function getImportSinkKey()
    {
        return $this->importSinkKey;
    }

    /**
     * <p>The import item version.</p>.
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Used to report errors when an import item is in the state VALIDATION_FAILED or REJECTED.</p>.
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceKey(?string $resourceKey)
    {
        $this->resourceKey = $resourceKey;

        return $this;
    }

    /**
     * @return $this
     */
    public function withRetryCount(?int $retryCount)
    {
        $this->retryCount = $retryCount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withImportSinkKey(?string $importSinkKey)
    {
        $this->importSinkKey = $importSinkKey;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withErrors(?ErrorObjectCollection $errors)
    {
        $this->errors = $errors;

        return $this;
    }

    public function build(): ImportItem
    {
        return new ImportItemModel(
            $this->createdAt,
            $this->lastModifiedAt,
            $this->resourceKey,
            $this->retryCount,
            $this->state,
            $this->importSinkKey,
            $this->version,
            $this->errors
        );
    }

    public static function of(): ImportItemBuilder
    {
        return new self();
    }
}
