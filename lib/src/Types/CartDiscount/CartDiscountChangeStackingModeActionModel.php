<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\CartDiscount\CartDiscountUpdateActionModel;

class CartDiscountChangeStackingModeActionModel extends CartDiscountUpdateActionModel implements CartDiscountChangeStackingModeAction {
    const DISCRIMINATOR_VALUE = 'changeStackingMode';

    /**
     * @var string
     */
    protected $stackingMode;

    /**
     * @return string
     */
    public function getStackingMode()
    {
        if (is_null($this->stackingMode)) {
            $value = $this->raw(CartDiscountChangeStackingModeAction::FIELD_STACKING_MODE);
            $value = (string)$value;
            $this->stackingMode = $value;
        }
        return $this->stackingMode;
    }

    /**
     * @param string $stackingMode
     * @return $this
     */
    public function setStackingMode(string $stackingMode)
    {
        $this->stackingMode = (string)$stackingMode;

        return $this;
    }

}
