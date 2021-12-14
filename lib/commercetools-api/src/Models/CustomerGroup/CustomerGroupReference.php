<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerGroupReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded Customer Group. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Customer Groups.</p>
     *
     * @return null|CustomerGroup
     */
    public function getObj();

    /**
     * <p>Unique ID of the referenced <a href="ctp:api:type:CustomerGroup">CustomerGroup</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?CustomerGroup $obj
     */
    public function setObj(?CustomerGroup $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
