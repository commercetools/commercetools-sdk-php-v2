<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importitems;

use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use DateTimeImmutable;

interface ImportItem extends JsonObject
{
    const FIELD_VERSION = 'version';
    const FIELD_IMPORT_SINK_KEY = 'importSinkKey';
    const FIELD_RESOURCE_KEY = 'resourceKey';
    const FIELD_STATE = 'state';
    const FIELD_RETRY_COUNT = 'retryCount';
    const FIELD_ERRORS = 'errors';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';

    /**
     * <p>The import item version.</p>.
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>The key of the import sink.</p>.
     *
     * @return null|string
     */
    public function getImportSinkKey();

    /**
     * <p>The key of the imported resource.</p>.
     *
     * @return null|string
     */
    public function getResourceKey();

    /**
     * <p>The status of a single import request.</p>.
     *
     * @return null|string
     */
    public function getState();

    /**
     * <p>The number of retries for this item.</p>.
     *
     * @return null|int
     */
    public function getRetryCount();

    /**
     * <p>Used to report errors when an import item is in the state VALIDATION_FAILED or REJECTED.</p>.
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors();

    /**
     * <p>The creation time of this import item.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>The last modification time of this import item.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    public function setVersion(?int $version): void;

    public function setImportSinkKey(?string $importSinkKey): void;

    public function setResourceKey(?string $resourceKey): void;

    public function setState(?string $state): void;

    public function setRetryCount(?int $retryCount): void;

    public function setErrors(?ErrorObjectCollection $errors): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;
}
