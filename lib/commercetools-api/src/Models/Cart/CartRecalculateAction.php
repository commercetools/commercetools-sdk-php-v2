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
     * <p>If set to <code>true</code>, the line item product data (<code>name</code>, <code>variant</code> and <code>productType</code>) will also be updated.
     * If set to <code>false</code>,
     * only the prices and tax rates of the line item will be updated.
     * The updated price of a line item may not correspond to a price in <code>variant.prices</code> anymore.</p>
     *
     * @return null|bool
     */
    public function getUpdateProductData();

    /**
     * @param ?bool $updateProductData
     */
    public function setUpdateProductData(?bool $updateProductData): void;
}
