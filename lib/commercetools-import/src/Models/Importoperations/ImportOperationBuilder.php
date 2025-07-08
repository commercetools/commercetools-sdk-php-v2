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
use Commercetools\Import\Models\Common\UnresolvedReferencesCollection;
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
    private $importContainerKey;

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

     * @var ?ErrorObjectCollection
     */
    private $errors;

    /**

     * @var ?UnresolvedReferencesCollection
     */
    private $unresolvedReferences;

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
     * <p>Current version of the ImportOperation.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:import:type:ImportContainer">ImportContainer</a>.</p>
     *

     * @return null|string
     */
    public function getImportContainerKey()
    {
        return $this->importContainerKey;
    }

    /**
     * <p><code>key</code> of the resource being imported.</p>
     *

     * @return null|string
     */
    public function getResourceKey()
    {
        return $this->resourceKey;
    }

    /**
     * <p>Unique identifier of the ImportOperation.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>The import status of the resource. If <code>rejected</code> or <code>validationFailed</code>, the import was unsuccessful.</p>
     *

     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>The <code>version</code> of the imported resource when the import was successful.</p>
     *

     * @return null|int
     */
    public function getResourceVersion()
    {
        return $this->resourceVersion;
    }

    /**
     * <p>Contains errors if the import was unsuccessful. See <a href="/import-export/error">Errors</a>.</p>
     *

     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * <p>If the resource being imported contains references to resources which do not exist, these references are contained within this array.</p>
     *

     * @return null|UnresolvedReferencesCollection
     */
    public function getUnresolvedReferences()
    {
        return $this->unresolvedReferences;
    }

    /**
     * <p>Date and time (UTC) the ImportOperation was created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the ImportOperation was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Date and time (UTC) the ImportOperation will be deleted.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?string $importContainerKey
     * @return $this
     */
    public function withImportContainerKey(?string $importContainerKey)
    {
        $this->importContainerKey = $importContainerKey;

        return $this;
    }

    /**
     * @param ?string $resourceKey
     * @return $this
     */
    public function withResourceKey(?string $resourceKey)
    {
        $this->resourceKey = $resourceKey;

        return $this;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $state
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?int $resourceVersion
     * @return $this
     */
    public function withResourceVersion(?int $resourceVersion)
    {
        $this->resourceVersion = $resourceVersion;

        return $this;
    }

    /**
     * @param ?ErrorObjectCollection $errors
     * @return $this
     */
    public function withErrors(?ErrorObjectCollection $errors)
    {
        $this->errors = $errors;

        return $this;
    }

    /**
     * @param ?UnresolvedReferencesCollection $unresolvedReferences
     * @return $this
     */
    public function withUnresolvedReferences(?UnresolvedReferencesCollection $unresolvedReferences)
    {
        $this->unresolvedReferences = $unresolvedReferences;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $expiresAt
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
            $this->importContainerKey,
            $this->resourceKey,
            $this->id,
            $this->state,
            $this->resourceVersion,
            $this->errors,
            $this->unresolvedReferences,
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
