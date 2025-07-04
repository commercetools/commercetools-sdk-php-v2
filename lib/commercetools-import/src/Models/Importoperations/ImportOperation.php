<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importoperations;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\UnresolvedReferencesCollection;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use DateTimeImmutable;

interface ImportOperation extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_IMPORT_CONTAINER_KEY = 'importContainerKey';
    public const FIELD_RESOURCE_KEY = 'resourceKey';
    public const FIELD_ID = 'id';
    public const FIELD_STATE = 'state';
    public const FIELD_RESOURCE_VERSION = 'resourceVersion';
    public const FIELD_ERRORS = 'errors';
    public const FIELD_UNRESOLVED_REFERENCES = 'unresolvedReferences';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    public const FIELD_EXPIRES_AT = 'expiresAt';

    /**
     * <p>Current version of the ImportOperation.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p><code>key</code> of the <a href="ctp:import:type:ImportContainer">ImportContainer</a>.</p>
     *

     * @return null|string
     */
    public function getImportContainerKey();

    /**
     * <p><code>key</code> of the resource being imported.</p>
     *

     * @return null|string
     */
    public function getResourceKey();

    /**
     * <p>Unique identifier of the ImportOperation.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>The import status of the resource. If <code>rejected</code> or <code>validationFailed</code>, the import was unsuccessful.</p>
     *

     * @return null|string
     */
    public function getState();

    /**
     * <p>The <code>version</code> of the imported resource when the import was successful.</p>
     *

     * @return null|int
     */
    public function getResourceVersion();

    /**
     * <p>Contains errors if the import was unsuccessful. See <a href="/import-export/error">Errors</a>.</p>
     *

     * @return null|ErrorObjectCollection
     */
    public function getErrors();

    /**
     * <p>If the resource being imported contains references to resources which do not exist, these references are contained within this array.</p>
     *

     * @return null|UnresolvedReferencesCollection
     */
    public function getUnresolvedReferences();

    /**
     * <p>Date and time (UTC) the ImportOperation was created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the ImportOperation was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Date and time (UTC) the ImportOperation will be deleted.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpiresAt();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $importContainerKey
     */
    public function setImportContainerKey(?string $importContainerKey): void;

    /**
     * @param ?string $resourceKey
     */
    public function setResourceKey(?string $resourceKey): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;

    /**
     * @param ?int $resourceVersion
     */
    public function setResourceVersion(?int $resourceVersion): void;

    /**
     * @param ?ErrorObjectCollection $errors
     */
    public function setErrors(?ErrorObjectCollection $errors): void;

    /**
     * @param ?UnresolvedReferencesCollection $unresolvedReferences
     */
    public function setUnresolvedReferences(?UnresolvedReferencesCollection $unresolvedReferences): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?DateTimeImmutable $expiresAt
     */
    public function setExpiresAt(?DateTimeImmutable $expiresAt): void;
}
