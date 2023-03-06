<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartRecalculateAction extends CartUpdateAction
{
    public const FIELD_UPDATE_PRODUCT_DATA = 'updateProductData';

    /**
     * <ul>
     * <li>Leave empty or set to <code>false</code> to only update the Prices and TaxRates of the Line Items.</li>
     * <li>Set to <code>true</code> to update the Line Items' product data (like <code>name</code>, <code>variant</code> and <code>productType</code>) also.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getUpdateProductData();

    /**
     * @param ?bool $updateProductData
     */
    public function setUpdateProductData(?bool $updateProductData): void;
}
