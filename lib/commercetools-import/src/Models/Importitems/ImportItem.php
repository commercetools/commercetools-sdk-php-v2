<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importitems;

use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\KeyReferenceCollection;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use DateTimeImmutable;

interface ImportItem extends JsonObject
{
    const FIELD_VERSION = 'version';
    const FIELD_IMPORT_SINK_KEY = 'importSinkKey';
    const FIELD_RESOURCE_KEY = 'resourceKey';
    const FIELD_STATE = 'state';
    const FIELD_RETRY_COUNT = 'retryCount';
    const FIELD_UNRESOLVED_REFERENCES = 'unresolvedReferences';
    const FIELD_ERRORS = 'errors';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    const FIELD_EXPIRES_AT = 'expiresAt';

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
     * <p>The key of the import resource.</p>.
     *
     * @return null|string
     */
    public function getResourceKey();

    /**
     * <p>The status of the import resource.</p>.
     *
     * @return null|string
     */
    public function getState();

    /**
     * <p>The number of request retries for processing the import resource.</p>.
     *
     * @return null|int
     */
    public function getRetryCount();

    /**
     * <p>If an import resource has unresolved references, the state is set to <code>Unresolved</code>
     * and this property contains the unresolved references.</p>.
     *
     * @return null|KeyReferenceCollection
     */
    public function getUnresolvedReferences();

    /**
     * <p>If an import resource does not import correctly, the state is set to <code>Rejected</code> or <code>ValidationFailed</code>
     * and this property contains the errors.</p>.
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors();

    /**
     * <p>When the import item was created.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>When the import item was modified.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>When the import item expires.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getExpiresAt();

    public function setVersion(?int $version): void;

    public function setImportSinkKey(?string $importSinkKey): void;

    public function setResourceKey(?string $resourceKey): void;

    public function setState(?string $state): void;

    public function setRetryCount(?int $retryCount): void;

    public function setUnresolvedReferences(?KeyReferenceCollection $unresolvedReferences): void;

    public function setErrors(?ErrorObjectCollection $errors): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setExpiresAt(?DateTimeImmutable $expiresAt): void;
}
