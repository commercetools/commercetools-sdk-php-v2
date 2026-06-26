<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantBulkUpdateItem extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_KEY = 'key';
    public const FIELD_VERSION = 'version';

    /**
     * <p>Unique identifier of the Variant to update. Either <code>id</code> or <code>key</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>User-defined unique identifier of the Variant to update. Either <code>id</code> or <code>key</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Expected version of the Variant. Required when the <code>versionControl</code> query parameter is <code>On</code> (the default).
     * If the version does not match, a <a href="ctp:api:type:ConcurrentModificationError">ConcurrentModification</a> error is returned for that item.
     * Not required when <code>versionControl=Off</code>.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;
}
