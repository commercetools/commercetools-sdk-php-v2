<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ZoneReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded Zone. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Zones.</p>
     *
     * @return null|Zone
     */
    public function getObj();

    /**
     * <p>Unique ID of the referenced <a href="ctp:api:type:Zone">Zone</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?Zone $obj
     */
    public function setObj(?Zone $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
