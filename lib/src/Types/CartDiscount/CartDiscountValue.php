<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Base\JsonObject;

use Commercetools\Types;

interface CartDiscountValue extends JsonObject
{
    const DISCRIMINATOR = 'type';
    const SUB_TYPES = [
        'absolute' => Types\CartDiscount\CartDiscountValueAbsolute::class,
        'giftLineItem' => Types\CartDiscount\CartDiscountValueGiftLineItem::class,
        'relative' => Types\CartDiscount\CartDiscountValueRelative::class,

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
