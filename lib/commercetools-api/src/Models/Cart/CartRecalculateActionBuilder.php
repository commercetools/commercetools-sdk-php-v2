<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;

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
     * @return null|bool
     */
    public function getUpdateProductData()
    {
        return $this->updateProductData;
    }

    /**
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
