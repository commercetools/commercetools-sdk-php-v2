<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AttributeGroupReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded AttributeGroup. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for AttributeGroup.</p>
     *

     * @return null|AttributeGroup
     */
    public function getObj();

    /**
     * <p>Platform-generated unique identifier of the referenced <a href="ctp:api:type:AttributeGroup">AttributeGroup</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * @param ?AttributeGroup $obj
     */
    public function setObj(?AttributeGroup $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
