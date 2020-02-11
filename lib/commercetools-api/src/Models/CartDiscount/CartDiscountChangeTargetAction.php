<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CartDiscountChangeTargetAction extends CartDiscountUpdateAction
{

    public const FIELD_TARGET = 'target';

    /**
     * @return null|CartDiscountTarget
     */
    public function getTarget();

    public function setTarget(?CartDiscountTarget $target): void;
}
