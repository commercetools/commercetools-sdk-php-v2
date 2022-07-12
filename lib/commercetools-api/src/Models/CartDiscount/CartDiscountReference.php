<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded CartDiscount. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for CartDiscounts.</p>
     *

     * @return null|CartDiscount
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:CartDiscount">CartDiscount</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * @param ?CartDiscount $obj
     */
    public function setObj(?CartDiscount $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
