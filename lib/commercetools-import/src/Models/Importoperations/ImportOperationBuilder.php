<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importoperations;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<ImportOperation>
 */
final class ImportOperationBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?string
     */
    private $importSinkKey;

    /**
     * @var ?string
     */
    private $resourceKey;

    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?string
     */
    private $state;

    /**
     * @var ?int
     */
    private $resourceVersion;

    /**
     * @var ?int
     */
    private $retryCount;

    /**
     * @var ?ErrorObjectCollection
     */
    private $errors;

    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $expiresAt;

    /**
     * <p>The import operation version.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>The key of the import sink.</p>
     *
     * @return null|string
     */
    public function getImportSinkKey()
    {
        return $this->importSinkKey;
    }

    /**
     * <p>The key of the import resource.</p>
     *
     * @return null|string
     */
    public function getResourceKey()
    {
        return $this->resourceKey;
    }

    /**
     * <p>The identifier of the operaton that is to be commited</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>The status of the import resource.</p>
     *
     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>When the resource is successfully imported, this represents the imported resource version</p>
     *
     * @return null|int
     */
    public function getResourceVersion()
    {
        return $this->resourceVersion;
    }

    /**
     * <p>The number of request retries for processing the import resource.</p>
     *
     * @return null|int
     */
    public function getRetryCount()
    {
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
        return $this->errors;
    }

    /**
     * <p>When the import operation was created.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>When the import operation was modified.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>When the import operation expires.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
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
    public function withImportSinkKey(?string $importSinkKey)
    {
        $this->importSinkKey = $importSinkKey;

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
    public function withId(?string $id)
    {
        $this->id = $id;

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
    public function withResourceVersion(?int $resourceVersion)
    {
        $this->resourceVersion = $resourceVersion;

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
    public function withErrors(?ErrorObjectCollection $errors)
    {
        $this->errors = $errors;

        return $this;
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
    public function withExpiresAt(?DateTimeImmutable $expiresAt)
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }


    public function build(): ImportOperation
    {
        return new ImportOperationModel(
            $this->version,
            $this->importSinkKey,
            $this->resourceKey,
            $this->id,
            $this->state,
            $this->resourceVersion,
            $this->retryCount,
            $this->errors,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->expiresAt
        );
    }

    public static function of(): ImportOperationBuilder
    {
        return new self();
    }
}
