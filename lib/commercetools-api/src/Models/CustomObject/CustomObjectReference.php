<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomObjectReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded CustomObject. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for CustomObjects.</p>
     *
     * @return null|CustomObject
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:CustomObject">CustomObject</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?CustomObject $obj
     */
    public function setObj(?CustomObject $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
