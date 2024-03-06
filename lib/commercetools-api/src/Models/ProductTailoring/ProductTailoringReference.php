<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTailoringReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:ProductTailoring">ProductTailoring</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Contains the representation of the expanded ProductTailoring. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for ProductTailoring.</p>
     *

     * @return null|ProductTailoring
     */
    public function getObj();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?ProductTailoring $obj
     */
    public function setObj(?ProductTailoring $obj): void;
}
