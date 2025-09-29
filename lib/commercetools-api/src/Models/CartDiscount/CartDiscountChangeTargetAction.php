<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountChangeTargetAction extends CartDiscountUpdateAction
{
    public const FIELD_TARGET = 'target';

    /**
     * <p>New value to set.</p>
     * <p>For a <a href="ctp:api:type:CartDiscountValueRelative">CartDiscountValueRelative</a>, if <code>applicationMode</code> is set, the target must be <a href="ctp:api:type:CartDiscountPatternTarget">CartDiscountPatternTarget</a>.
     * If <code>applicationMode</code> is <code>ProportionateDistribution</code> or <code>EvenDistribution</code>, the <a href="ctp:api:type:CartDiscountPatternTarget">CartDiscountPatternTarget</a> <code>triggerPattern</code> must be non-empty.
     * If either conditions are not met, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     *

     * @return null|CartDiscountTarget
     */
    public function getTarget();

    /**
     * @param ?CartDiscountTarget $target
     */
    public function setTarget(?CartDiscountTarget $target): void;
}
