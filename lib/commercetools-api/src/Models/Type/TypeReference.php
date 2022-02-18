<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypeReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Unique ID of the referenced <a href="ctp:api:type:Type">Type</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>Contains the representation of the expanded Type.
     * Only present in responses to requests with <a href="ctp:api:type:Expansion">Reference Expansion</a> for Types.</p>
     *
     * @return null|Type
     */
    public function getObj();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?Type $obj
     */
    public function setObj(?Type $obj): void;
}
