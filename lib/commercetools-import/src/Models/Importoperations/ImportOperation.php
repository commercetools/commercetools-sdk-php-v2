<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importoperations;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
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
    public const FIELD_RETRY_COUNT = 'retryCount';
    public const FIELD_ERRORS = 'errors';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    public const FIELD_EXPIRES_AT = 'expiresAt';

    /**
     * <p>The import operation version.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>The key of the import sink.</p>
     *
     * @return null|string
     */
    public function getImportSinkKey();

    /**
     * <p>The key of the import resource.</p>
     *
     * @return null|string
     */
    public function getResourceKey();

    /**
     * <p>The identifier of the operaton that is to be commited</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>The status of the import resource.</p>
     *
     * @return null|string
     */
    public function getState();

    /**
     * <p>When the resource is successfully imported, this represents the imported resource version</p>
     *
     * @return null|int
     */
    public function getResourceVersion();

    /**
     * <p>The number of request retries for processing the import resource.</p>
     *
     * @return null|float
     */
    public function getRetryCount();

    /**
     * <p>If an import resource does not import correctly, the state is set to <code>Rejected</code> or <code>ValidationFailed</code>
     * and this property contains the errors.</p>
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors();

    /**
     * <p>When the import operation was created.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>When the import operation was modified.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>When the import operation expires.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getExpiresAt();

    public function setVersion(?int $version): void;

    public function setImportSinkKey(?string $importSinkKey): void;

    public function setResourceKey(?string $resourceKey): void;

    public function setId(?string $id): void;

    public function setState(?string $state): void;

    public function setResourceVersion(?int $resourceVersion): void;

    public function setRetryCount(?float $retryCount): void;

    public function setErrors(?ErrorObjectCollection $errors): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setExpiresAt(?DateTimeImmutable $expiresAt): void;
}
