<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductDiscount\ProductDiscountValueModel;

class ProductDiscountValueRelativeModel extends ProductDiscountValueModel implements ProductDiscountValueRelative {
    const DISCRIMINATOR_VALUE = 'relative';

    /**
     * @var int
     */
    protected $permyriad;

    /**
     * @return int
     */
    public function getPermyriad()
    {
        if (is_null($this->permyriad)) {
            $value = $this->raw(ProductDiscountValueRelative::FIELD_PERMYRIAD);
            $value = (int)$value;
            $this->permyriad = $value;
        }
        return $this->permyriad;
    }

    /**
     * @param int $permyriad
     * @return $this
     */
    public function setPermyriad(int $permyriad)
    {
        $this->permyriad = (int)$permyriad;

        return $this;
    }

}
