<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Cart\CartUpdateActionModel;

class CartRecalculateActionModel extends CartUpdateActionModel implements CartRecalculateAction {
    const DISCRIMINATOR_VALUE = 'recalculate';

    /**
     * @var mixed
     */
    protected $updateProductData;

    /**
     * @return mixed
     */
    public function getUpdateProductData()
    {
        if (is_null($this->updateProductData)) {
            $value = $this->raw(CartRecalculateAction::FIELD_UPDATE_PRODUCT_DATA);
            $this->updateProductData = $value;
        }
        return $this->updateProductData;
    }

    /**
     * @param $updateProductData
     * @return $this
     */
    public function setUpdateProductData($updateProductData)
    {
        $this->updateProductData = $updateProductData;

        return $this;
    }

}
