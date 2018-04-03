<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionModel;

class DiscountCodeChangeIsActiveActionModel extends DiscountCodeUpdateActionModel implements DiscountCodeChangeIsActiveAction {
    const DISCRIMINATOR_VALUE = 'changeIsActive';

    /**
     * @var mixed
     */
    protected $isActive;

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        if (is_null($this->isActive)) {
            $value = $this->raw(DiscountCodeChangeIsActiveAction::FIELD_IS_ACTIVE);
            $this->isActive = $value;
        }
        return $this->isActive;
    }

    /**
     * @param $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

}
