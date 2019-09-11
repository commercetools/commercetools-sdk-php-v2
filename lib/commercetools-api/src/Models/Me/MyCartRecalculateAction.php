<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

interface MyCartRecalculateAction extends MyCartUpdateAction
{
    const FIELD_UPDATE_PRODUCT_DATA = 'updateProductData';

    /**
     * @return null|bool
     */
    public function getUpdateProductData();

    public function setUpdateProductData(?bool $updateProductData): void;
}
