<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importresources;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface UnresolvedImportResource extends JsonObject
{
    const FIELD_RESOURCE_KEY = 'resourceKey';
    const FIELD_RESOURCE_TYPE = 'resourceType';
    const FIELD_RESOURCE_AS_STRING = 'resourceAsString';
    const FIELD_IMPORT_SINK_KEY = 'importSinkKey';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';

    /**
     * <p>The key of the imported resource.</p>.
     *
     * @return null|string
     */
    public function getResourceKey();

    /**
     * <p>The type of the imported resource.</p>.
     *
     * @return null|string
     */
    public function getResourceType();

    /**
     * <p>the resource which could not successfull imported</p>.
     *
     * @return null|string
     */
    public function getResourceAsString();

    /**
     * <p>the key of the import sink</p>.
     *
     * @return null|string
     */
    public function getImportSinkKey();

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

    public function setResourceKey(?string $resourceKey): void;

    public function setResourceType(?string $resourceType): void;

    public function setResourceAsString(?string $resourceAsString): void;

    public function setImportSinkKey(?string $importSinkKey): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;
}
