<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

interface CartDiscountChangeStackingModeAction extends CartDiscountUpdateAction {
    const FIELD_STACKING_MODE = 'stackingMode';

    /**
     * @return string
     */
    public function getStackingMode();

    /**
     * @param string $stackingMode
     * @return $this
     */
    public function setStackingMode(string $stackingMode);

}
