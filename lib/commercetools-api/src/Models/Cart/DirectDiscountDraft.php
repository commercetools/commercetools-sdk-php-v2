<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountTarget;
use Commercetools\Api\Models\CartDiscount\CartDiscountValue;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DirectDiscountDraft extends JsonObject
{
    public const FIELD_VALUE = 'value';
    public const FIELD_TARGET = 'target';

    /**
     * <p>Defines the effect the Discount will have.</p>
     *

     * @return null|CartDiscountValue
     */
    public function getValue();

    /**
     * <p>Defines what part of the Cart will be discounted.</p>
     * <p>If <code>value</code> is set to <code>giftLineItem</code>, this must not be set.</p>
     *

     * @return null|CartDiscountTarget
     */
    public function getTarget();

    /**
     * @param ?CartDiscountValue $value
     */
    public function setValue(?CartDiscountValue $value): void;

    /**
     * @param ?CartDiscountTarget $target
     */
    public function setTarget(?CartDiscountTarget $target): void;
}
