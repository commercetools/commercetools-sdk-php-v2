<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded Product. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Products.</p>
     *
     * @return null|Product
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:Product">Product</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?Product $obj
     */
    public function setObj(?Product $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
