<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartRecalculateAction extends CartUpdateAction
{
    const FIELD_UPDATE_PRODUCT_DATA = 'updateProductData';

    /**
     * @return mixed
     */
    public function getUpdateProductData();

    /**
     * @param mixed $updateProductData
     * @return $this
     */
    public function setUpdateProductData($updateProductData);

}
