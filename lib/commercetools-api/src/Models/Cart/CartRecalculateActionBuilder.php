<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartRecalculateAction>
 */
final class CartRecalculateActionBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $updateProductData;

    /**
     * <ul>
     * <li>Leave empty or set to <code>false</code> to only update the Prices and TaxRates of the Line Items.</li>
     * <li>Set to <code>true</code> to update the Line Items' product data (like <code>name</code>, <code>variant</code> and <code>productType</code>) also.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getUpdateProductData()
    {
        return $this->updateProductData;
    }

    /**
     * @param ?bool $updateProductData
     * @return $this
     */
    public function withUpdateProductData(?bool $updateProductData)
    {
        $this->updateProductData = $updateProductData;

        return $this;
    }


    public function build(): CartRecalculateAction
    {
        return new CartRecalculateActionModel(
            $this->updateProductData
        );
    }

    public static function of(): CartRecalculateActionBuilder
    {
        return new self();
    }
}
