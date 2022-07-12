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
     *

     * @return null|CartDiscountTarget
     */
    public function getTarget();

    /**
     * @param ?CartDiscountTarget $target
     */
    public function setTarget(?CartDiscountTarget $target): void;
}
