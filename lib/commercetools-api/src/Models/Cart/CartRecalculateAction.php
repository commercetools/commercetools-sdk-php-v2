<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartRecalculateAction extends CartUpdateAction
{
    
    const FIELD_UPDATE_PRODUCT_DATA = 'updateProductData';

    /**
     *
     * @return bool|null
     */
    public function getUpdateProductData();
    public function setUpdateProductData(?bool $updateProductData): void;
}