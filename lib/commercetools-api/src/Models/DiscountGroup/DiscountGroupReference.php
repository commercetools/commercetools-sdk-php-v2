<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountGroup;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountGroupReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:DiscountGroup">DiscountGroup</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Contains the representation of the expanded DiscountGroup.
     * Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for DiscountGroups.</p>
     *

     * @return null|DiscountGroup
     */
    public function getObj();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?DiscountGroup $obj
     */
    public function setObj(?DiscountGroup $obj): void;
}
