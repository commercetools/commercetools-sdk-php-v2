<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductDiscountReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded ProductDiscount. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for ProductDiscounts.</p>
     *
     * @return null|ProductDiscount
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:ProductDiscount">ProductDiscount</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?ProductDiscount $obj
     */
    public function setObj(?ProductDiscount $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
