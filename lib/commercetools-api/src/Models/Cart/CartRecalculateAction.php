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
     * <li>Leave empty or set as <code>false</code> to update only the Prices and TaxRates of the Line Items.</li>
     * <li>Set as <code>true</code> to update the Product data (such as <code>name</code>, <code>variant</code>, <code>productType</code>, and Product Attributes) of the Line Items.</li>
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
