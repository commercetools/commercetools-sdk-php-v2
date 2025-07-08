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
     * <p>Money value of the discounted price.</p>
     *

     * @return null|TypedMoney
     */
    public function getValue();

    /**
     * <p>Reference to a ProductDiscount. If the referenced <a href="ctp:api:type:ProductDiscount">ProductDiscount</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced ProductDiscount is created.</p>
     *

     * @return null|ProductDiscountKeyReference
     */
    public function getDiscount();

    /**
     * @param ?TypedMoney $value
     */
    public function setValue(?TypedMoney $value): void;

    /**
     * @param ?ProductDiscountKeyReference $discount
     */
    public function setDiscount(?ProductDiscountKeyReference $discount): void;
}
