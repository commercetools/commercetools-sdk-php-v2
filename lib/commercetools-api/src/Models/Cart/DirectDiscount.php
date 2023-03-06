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

interface DirectDiscount extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VALUE = 'value';
    public const FIELD_TARGET = 'target';

    /**
     * <p>Unique identifier of the Direct Discount.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Effect of the Discount on the Cart.</p>
     *

     * @return null|CartDiscountValue
     */
    public function getValue();

    /**
     * <p>Part of the Cart that is discounted.</p>
     * <p>Empty when the <code>value</code> is set to <code>giftLineItem</code>.</p>
     *

     * @return null|CartDiscountTarget
     */
    public function getTarget();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?CartDiscountValue $value
     */
    public function setValue(?CartDiscountValue $value): void;

    /**
     * @param ?CartDiscountTarget $target
     */
    public function setTarget(?CartDiscountTarget $target): void;
}
