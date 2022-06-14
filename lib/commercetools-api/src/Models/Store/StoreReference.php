<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded Store. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Stores.</p>
     *
     * @return null|Store
     */
    public function getObj();

    /**
     * <p>Unique ID of the referenced <a href="ctp:api:type:Store">Store</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?Store $obj
     */
    public function setObj(?Store $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
