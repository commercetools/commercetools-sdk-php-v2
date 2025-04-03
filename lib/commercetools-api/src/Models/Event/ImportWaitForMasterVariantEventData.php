<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ImportWaitForMasterVariantEventData extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';
    public const FIELD_IMPORT_CONTAINER_KEY = 'importContainerKey';

    /**
     * <p>The <code>id</code> of the Import Operation with the <code>waitForMasterVariant</code> state.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>The <code>version</code> of the Import Operation with the <code>waitForMasterVariant</code> state.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>The <code>key</code> of the Import Container.</p>
     *

     * @return null|string
     */
    public function getImportContainerKey();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $importContainerKey
     */
    public function setImportContainerKey(?string $importContainerKey): void;
}
