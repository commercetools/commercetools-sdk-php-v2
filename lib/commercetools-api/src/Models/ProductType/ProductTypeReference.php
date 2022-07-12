<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded ProductType. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for ProductTypes.</p>
     *

     * @return null|ProductType
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:ProductType">ProductType</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * @param ?ProductType $obj
     */
    public function setObj(?ProductType $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
