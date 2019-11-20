<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importitems;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Common\KeyReferenceCollection;
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
     * @var ?KeyReferenceCollection
     */
    private $unresolvedReferences;

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
     * @var ?DateTimeImmutable
     */
    private $expiresAt;

    /**
     * @var ?ErrorObjectCollection
     */
    private $errors;

    /**
     * <p>When the import item was created.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>When the import item was modified.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>The key of the import resource.</p>.
     *
     * @return null|string
     */
    public function getResourceKey()
    {
        return $this->resourceKey;
    }

    /**
     * <p>The number of request retries for processing the import resource.</p>.
     *
     * @return null|int
     */
    public function getRetryCount()
    {
        return $this->retryCount;
    }

    /**
     * <p>If an import resource has unresolved references, the state is set to <code>Unresolved</code>
     * and this property contains the unresolved references.</p>.
     *
     * @return null|KeyReferenceCollection
     */
    public function getUnresolvedReferences()
    {
        return $this->unresolvedReferences;
    }

    /**
     * <p>The status of the import resource.</p>.
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
     * <p>When the import item expires.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * <p>If an import resource does not import correctly, the state is set to <code>Rejected</code> or <code>ValidationFailed</code>
     * and this property contains the errors.</p>.
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
    public function withUnresolvedReferences(?KeyReferenceCollection $unresolvedReferences)
    {
        $this->unresolvedReferences = $unresolvedReferences;

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
    public function withExpiresAt(?DateTimeImmutable $expiresAt)
    {
        $this->expiresAt = $expiresAt;

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
            $this->unresolvedReferences,
            $this->state,
            $this->importSinkKey,
            $this->version,
            $this->expiresAt,
            $this->errors
        );
    }

    public static function of(): ImportItemBuilder
    {
        return new self();
    }
}
