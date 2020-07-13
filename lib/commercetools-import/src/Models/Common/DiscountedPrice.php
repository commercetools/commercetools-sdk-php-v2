<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountedPrice extends JsonObject
{
    public const FIELD_VALUE = 'value';
    public const FIELD_DISCOUNT = 'discount';

    /**
     * @return null|Money
     */
    public function getValue();

    /**
     * <p>Reference to a ProductDiscount.</p>
     *
     * @return null|ProductDiscountKeyReference
     */
    public function getDiscount();

    /**
     * @param ?Money $value
     */
    public function setValue(?Money $value): void;

    /**
     * @param ?ProductDiscountKeyReference $discount
     */
    public function setDiscount(?ProductDiscountKeyReference $discount): void;
}
