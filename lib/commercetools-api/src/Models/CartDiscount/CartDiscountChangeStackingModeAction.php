<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountChangeStackingModeAction extends CartDiscountUpdateAction
{
    public const FIELD_STACKING_MODE = 'stackingMode';

    /**
     * <p>New value to set.</p>
     *

     * @return null|string
     */
    public function getStackingMode();

    /**
     * @param ?string $stackingMode
     */
    public function setStackingMode(?string $stackingMode): void;
}
