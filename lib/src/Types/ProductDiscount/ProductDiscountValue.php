<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Base\JsonObject;

use Commercetools\Types;

interface ProductDiscountValue extends JsonObject
{
    const DISCRIMINATOR = 'type';
    const SUB_TYPES = [
        'absolute' => Types\ProductDiscount\ProductDiscountValueAbsolute::class,
        'external' => Types\ProductDiscount\ProductDiscountValueExternal::class,
        'relative' => Types\ProductDiscount\ProductDiscountValueRelative::class,

    ];

    const FIELD_TYPE = 'type';

    /**
     * @return string
     */
    public function getType();

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type);

}
