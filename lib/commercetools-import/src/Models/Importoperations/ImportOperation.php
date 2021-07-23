<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importoperations;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\KeyReferenceCollection;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use DateTimeImmutable;

interface ImportOperation extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_IMPORT_SINK_KEY = 'importSinkKey';
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
     * <p>The version of the ImportOperation.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>The key of the <a href="/import-sink#importsink">ImportSink</a>.</p>
     *
     * @return null|string
     */
    public function getImportSinkKey();

    /**
     * <p>The key of the resource.</p>
     *
     * @return null|string
     */
    public function getResourceKey();

    /**
     * <p>The ID of the ImportOperation.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>The import status of the resource. Set to <code>Rejected</code> or <code>ValidationFailed</code> if the import of the resource was not successful.</p>
     *
     * @return null|string
     */
    public function getState();

    /**
     * <p>The version of the impmorted resource when the import was successful.</p>
     *
     * @return null|int
     */
    public function getResourceVersion();

    /**
     * <p>Contains an error if the import of the resource was not successful. See <a href="/error">Errors</a>.</p>
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors();

    /**
     * <p>In case of unresolved status this array will show the unresolved references</p>
     *
     * @return null|KeyReferenceCollection
     */
    public function getUnresolvedReferences();

    /**
     * <p>The time when the ImportOperation was created.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>The last time When the ImportOperation was modified.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>The expiration time of the ImportOperation.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getExpiresAt();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $importSinkKey
     */
    public function setImportSinkKey(?string $importSinkKey): void;

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
     * @param ?KeyReferenceCollection $unresolvedReferences
     */
    public function setUnresolvedReferences(?KeyReferenceCollection $unresolvedReferences): void;

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
